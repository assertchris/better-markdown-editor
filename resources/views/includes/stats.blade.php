@if ($getHasLanguageAssistance())
    <div class="flex flex-row flex-wrap justify-end p-2 text-xs rounded-lg gap-2">
        <span x-show="moderateSentences > 0 || complexSentences > 0">{{__('sentences: ')}}</span>
        <span x-show="moderateSentences > 0" class="flex flex-row items-center justify-center gap-2">
            <span class="inline-flex rounded-full overflow-hidden w-[8px] h-[8px] language-moderate-sentence">&nbsp;</span>
            <span x-text="moderateSentences"></span>
            <span>{{ __('moderate') }}</span>
        </span>
        <span x-show="complexSentences > 0" class="flex flex-row items-center justify-center gap-2">
            <span class="inline-flex rounded-full overflow-hidden w-[8px] h-[8px] language-complex-sentence">&nbsp;</span>
            <span x-text="complexSentences"></span>
            <span>{{ __('complex') }}</span>
        </span>
    </div>
    <div class="flex flex-row flex-wrap justify-end p-2 text-xs rounded-lg gap-2">
        <span x-show="passivePhrases > 0 || adverbPhrases > 0 || complexPhrases > 0 || qualifiedPhrases > 0">{{__('phrases: ')}}</span>
        <span x-show="passivePhrases > 0" class="flex flex-row items-center justify-center gap-2">
            <span class="inline-flex rounded-full overflow-hidden w-[8px] h-[8px] language-passive-phrase">&nbsp;</span>
            <span x-text="passivePhrases"></span>
            <span>{{ __('passive') }}</span>
        </span>
        <span x-show="adverbPhrases > 0" class="flex flex-row items-center justify-center gap-2">
            <span class="inline-flex rounded-full overflow-hidden w-[8px] h-[8px] language-adverb-phrase">&nbsp;</span>
            <span x-text="adverbPhrases"></span>
            <span>{{ __('adverb') }}</span>
        </span>
        <span x-show="complexPhrases > 0" class="flex flex-row items-center justify-center gap-2">
            <span class="inline-flex rounded-full overflow-hidden w-[8px] h-[8px] language-complex-phrase">&nbsp;</span>
            <span x-text="complexPhrases"></span>
            <span>{{ __('verbose') }}</span>
        </span>
        <span x-show="qualifiedPhrases > 0" class="flex flex-row items-center justify-center gap-2">
            <span class="inline-flex rounded-full overflow-hidden w-[8px] h-[8px] language-qualified-phrase">&nbsp;</span>
            <span x-text="qualifiedPhrases"></span>
            <span>{{ __('qualified') }}</span>
        </span>
    </div>
@endif
