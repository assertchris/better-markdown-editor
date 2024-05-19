import {
    getSentenceDifficulty,
    getPassivePhrases,
    getAdverbPhrases,
    getComplexPhrases,
    getQualifiedPhrases,
} from '@assertchris/ellison'

window.betterMarkdownEditorSetUpUsing = function(component) {
    const clearStats = () => {
        component.moderateSentences = 0
        component.complexSentences = 0
        component.passivePhrases = 0
        component.adverbPhrases = 0
        component.complexPhrases = 0
        component.qualifiedPhrases = 0
    }

    let oldValue = null
    const markers = []

    const debounce = (func, timeout = 300) => {
        let timer

        return (...args) => {
            clearTimeout(timer)
            timer = setTimeout(() => { func.apply(this, args); }, timeout)
        }
    }

    const getAllIndices = (str, val) => {
        const indices = []
        let i = -1

        while ((i = str.indexOf(val, i+1)) !== -1){
            indices.push(i)
        }

        return indices
    }

    const checkLanguage = (cm) => {
        const newValue = cm.getValue()

        if (oldValue === newValue) {
            return
        }

        clearStats()

        while (markers.length > 0) {
            try {
                markers.pop().clear()
            } catch (e) {
                console.warn(e)
            }
        }

        oldValue = newValue

        const lines = cm.doc.children[0].lines

        for (let line of lines) {
            let sentenceOffset = 0

            const sentences = getSentenceDifficulty(line.text)
            const lineNumber = cm.getLineNumber(line)
            const lineElement = component.$refs.editor.parentNode.parentNode.querySelectorAll('.CodeMirror-line')[lineNumber]

            for (let sentence of sentences) {
                if (sentence.type === 'moderate') {
                    component.moderateSentences++
                }

                if (sentence.type === 'complex') {
                    component.complexSentences++
                }

                const sentenceText = sentence.text.trim()

                if (lineElement.innerText.indexOf(sentenceText) < 0) {
                    continue
                }

                const offset = lineElement.innerText.indexOf(sentenceText, sentenceOffset)

                const params = [
                    {
                        line: lineNumber,
                        ch: lineElement.innerText.indexOf(sentenceText, sentenceOffset),
                    }, {
                        line: lineNumber,
                        ch: lineElement.innerText.indexOf(sentenceText, sentenceOffset) + sentenceText.length,
                    }, {
                        className: `language-${sentence.type}-sentence`,
                    }
                ]

                sentenceOffset = offset + sentenceText.length

                markers.push(cm.markText(...params))

                const problems = [
                    ...getAdverbPhrases(sentenceText),
                    ...getPassivePhrases(sentenceText),
                    ...getComplexPhrases(sentenceText),
                    ...getQualifiedPhrases(sentenceText),
                ];

                for (let problem of problems) {
                    if (problem.type === 'adverb') {
                        component.adverbPhrases++
                    }

                    if (problem.type === 'passive') {
                        component.passivePhrases++
                    }

                    if (problem.type === 'complex') {
                        component.complexPhrases++
                    }

                    if (problem.type === 'qualified') {
                        component.qualifiedPhrases++
                    }

                    const indices = getAllIndices(lineElement.innerText.toLowerCase(), problem.text.toLowerCase());

                    for (let index of indices) {
                        const params = [
                            {
                                line: lineNumber,
                                ch: index,
                            }, {
                                line: lineNumber,
                                ch: index + problem.text.length,
                            }, {
                                className: `language-${problem.type}-phrase`,
                            }
                        ]

                        markers.push(cm.markText(...params))
                    }
                }
            }
        }
    }

    component.editor.codemirror.on('update', debounce(checkLanguage))
}
