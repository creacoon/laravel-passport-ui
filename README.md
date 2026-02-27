# Laravel Passport UI

[![Latest Version on Packagist](https://img.shields.io/packagist/v/creacoon/laravel-passport-ui.svg?style=flat-square)](https://packagist.org/packages/creacoon/laravel-passport-ui)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/creacoon/laravel-passport-ui/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/creacoon/laravel-passport-ui/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/creacoon/laravel-passport-ui/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/creacoon/laravel-passport-ui/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/creacoon/laravel-passport-ui.svg?style=flat-square)](https://packagist.org/packages/creacoon/laravel-passport-ui)

This package provides a custom authorization view for Laravel Passport, allowing you to replace the default OAuth authorization page with a modern, Tailwind CSS-styled interface.

## Installation

You can install the package via composer:

```bash
composer require creacoon/laravel-passport-ui
```

After installation, publish the authorization view to customize the Passport authorization page:

```bash
php artisan vendor:publish --tag="laravel-passport-ui-views"
```

This will copy the `authorize.blade.php` file to `resources/views/vendor/passport/authorize.blade.php`, overriding the default Laravel Passport view.

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jibbe Winands](https://github.com/jianbe-03)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
