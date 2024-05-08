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
    ->toolbarButtons([
        'blockquote',
        'bold',
        'bulletList',
        'italic',
        'link',
        'orderedList',
        'redo',
        'strike',
        'undo',
    ])
    ->hiddenLabel()
    ->hasLanguageAssistance(),
```

## Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](license.md) for more information.
