# Laravel TALL Stack Admin Preset

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mortenebak/laravel-admin-preset.svg?style=flat-square)](https://packagist.org/packages/mortenebak/laravel-admin-preset)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/mortenebak/laravel-admin-preset/run-tests?label=tests)](https://github.com/mortenebak/laravel-admin-preset/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/mortenebak/laravel-admin-preset/Check%20&%20fix%20styling?label=code%20style)](https://github.com/mortenebak/laravel-admin-preset/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/mortenebak/laravel-admin-preset.svg?style=flat-square)](https://packagist.org/packages/mortenebak/laravel-admin-preset)

This is an opinionated Laravel Admin Preset package, that scaffolds a complete admin dashboard with roles and permissions.

It is very much in development and should not be used in production yet.

## Installation

You can install the package via composer:

```bash
composer require mortenebak/laravel-admin-preset
```

[//]: # ()
[//]: # (You can publish and run the migrations with:)

[//]: # ()
[//]: # (```bash)

[//]: # (php artisan vendor:publish --tag="laravel-admin-preset-migrations")

[//]: # (php artisan migrate)

[//]: # (```)

[//]: # ()
[//]: # (You can publish the config file with:)

[//]: # ()
[//]: # (```bash)

[//]: # (php artisan vendor:publish --tag="laravel-admin-preset-config")

[//]: # (```)

[//]: # ()
[//]: # (This is the contents of the published config file:)

[//]: # ()
[//]: # (```php)

[//]: # (return [)

[//]: # (];)

[//]: # (```)

[//]: # ()
[//]: # (Optionally, you can publish the views using)

[//]: # ()
[//]: # (```bash)

[//]: # (php artisan vendor:publish --tag="laravel-admin-preset-views")

[//]: # (```)

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Morten Bak](https://github.com/mortenebak)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
