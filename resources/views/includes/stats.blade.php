@if ($getHasLanguageAssistance())
    <div class="flex flex-row flex-wrap justify-end p-2 text-xs rounded-lg gap-2">
        <span x-show="moderateSentences > 0 || complexSentences > 0">{{__('sentences: ')}}</span>
        <x-better-markdown-editor::tag
            class="language-moderate-sentence"
            property="moderateSentences"
            label="moderate"
        />
        <x-better-markdown-editor::tag
            class="language-complex-sentence"
            property="complexSentences"
            label="complex"
        />
    </div>
    <div class="flex flex-row flex-wrap justify-end p-2 text-xs rounded-lg gap-2">
        <span x-show="passivePhrases > 0 || adverbPhrases > 0 || complexPhrases > 0 || qualifiedPhrases > 0">{{__('phrases: ')}}</span>
        <x-better-markdown-editor::tag
            class="language-passive-phrase"
            property="passivePhrases"
            label="passive"
        />
        <x-better-markdown-editor::tag
            class="language-adverb-phrase"
            property="adverbPhrases"
            label="adverb"
        />
        <x-better-markdown-editor::tag
            class="language-complex-phrase"
            property="complexPhrases"
            label="verbose"
        />
        <x-better-markdown-editor::tag
            class="language-qualified-phrase"
            property="qualifiedPhrases"
            label="qualified"
        />
    </div>
@endif
