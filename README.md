# Load legacy php scripts inside your laravel app.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/headerx/laravel-legacy-loader.svg?style=flat-square)](https://packagist.org/packages/headerx/laravel-legacy-loader)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/headerx/laravel-legacy-loader/run-tests?label=tests)](https://github.com/headerx/laravel-legacy-loader/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/headerx/laravel-legacy-loader/Check%20&%20fix%20styling?label=code%20style)](https://github.com/headerx/laravel-legacy-loader/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/headerx/laravel-legacy-loader.svg?style=flat-square)](https://packagist.org/packages/headerx/laravel-legacy-loader)

## Installation

You can install the package via composer:

```bash
composer require headerx/laravel-legacy-loader
```
You can publish the config file with:
```bash
php artisan vendor:publish --provider="HeaderX\LegacyLoader\LegacyLoaderServiceProvider" --tag="legacy-loader-config"
```

This is the contents of the published config file:

```php
return [
    'route_prefix' => env('LEGACY_ROUTE_PREFIX', 'legacy'),
    /**
     * Path to legacy php scripts
     * relative to base_path()
     */
    'file_path' => env('LEGACY_FILE_PATH', 'resources/legacy'),
    /**
     * If your legacy app has its own
     * authentication you will need
     * to publish config and add
     * your own middleware.
     */
    'middleware' => [
        'web',
        // 'auth',
    ],
```



## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [inmanturbo](https://github.com/inmanturbo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
