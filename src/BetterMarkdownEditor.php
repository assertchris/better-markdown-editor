<?php

namespace AC\BetterMarkdownEditor;

use Filament\Forms\Components\MarkdownEditor;

class BetterMarkdownEditor extends MarkdownEditor
{
    use Concerns\HasLanguageAssistance;

    protected string $view = 'better-markdown-editor::components.markdown-editor';
}
