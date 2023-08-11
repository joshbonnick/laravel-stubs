# Laravel stubs

This repo contains opinionated versions of the Laravel stubs. The most notable changes are:

## Installation

You can install the package via composer:

```bash
composer require joshbonnick/laravel-stubs --dev
```

If you want to keep your stubs up to date with every update, add this composer hook to your composer.json file:

```json
"scripts": {
    "post-update-cmd": [
        "@php artisan laravel-stubs:publish --force"
    ]
}
```

## Usage

You can publish the stubs using this command:

```bash
php artisan laravel-stubs:publish
```

## Testing

``` bash
composer test
```
