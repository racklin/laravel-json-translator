# laravel 5.4+ JSON localization for Laravel 5.1+
This package make your old laravel project using laravel 5.4+ JSON localization.

## Install
1. Use composer to add the package into your project
using
`composer require racklin/json-translator:dev-master`

## Add Service Provider
Add service provider into your providers array in `config/app.php`
```
Racklin\JsonTranslator\JsonTranslationServiceProvider::class,
```

# Retrieving Translation Strings
You may retrieve lines from language files using the `__` helper function.

## Laravel version

Current package version works for Laravel 5.1+.

## License
MIT: https://racklin.mit-license.org/
