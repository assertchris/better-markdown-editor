# Better Markdown Editor

[![Latest Version on Packagist](https://img.shields.io/packagist/v/assertchris/better-markdown-editor.svg?style=flat-square)](https://packagist.org/packages/assertchris/better-markdown-editor)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/assertchris/better-markdown-editor/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/assertchris/better-markdown-editor/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/assertchris/better-markdown-editor/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/assertchris/better-markdown-editor/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/assertchris/better-markdown-editor.svg?style=flat-square)](https://packagist.org/packages/assertchris/better-markdown-editor)

A better markdown editor than the one that ships with Filament.

## Installation

You can install the package via composer:

```bash
composer require assertchris/better-markdown-editor
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="better-markdown-editor-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="better-markdown-editor-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
use AC\BetterMarkdownEditor\BetterMarkdownEditor;

BetterMarkdownEditor::make('markdown')
    // ...all the methods from the current MarkdownEditor
    // with the addition of some new methods
    ->hasLanguageAssistance(),
```

## Motivation

> Why build this?

I wanted to build a writing platform. I love Filament, but none of the fields had the functionality I use other apps for. It started as me wanting to make Filament's MarkdownEditor able to point out needlessly complex sentences and poor wording.

> Why not contribute those improvements to Filament?

I tried, but they're understandably hesitant to take on the maintenance burden.

> Why is it better?

For a start, it does what Hemingway does; but better.

Here's what I am planning to add in the near future (while procrastinating writing projects):

- fullscreen mode
- opt-in LLM-based error correction (with loads of caveats and apprehension)
- an upgrade to CodeMirror 6

## Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](license.md) for more information.
