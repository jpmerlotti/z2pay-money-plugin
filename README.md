# This is the z2pay's money-field plugin

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jpmerlotti/z2pay-money-field.svg?style=flat-square)](https://packagist.org/packages/jpmerlotti/z2pay-money-field)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jpmerlotti/z2pay-money-field/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jpmerlotti/z2pay-money-field/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jpmerlotti/z2pay-money-field/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jpmerlotti/z2pay-money-field/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jpmerlotti/z2pay-money-field.svg?style=flat-square)](https://packagist.org/packages/jpmerlotti/z2pay-money-field)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require jpmerlotti/z2pay-money-field
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="z2pay-money-field-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="z2pay-money-field-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="z2pay-money-field-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$z2payMoneyField = new Jpmerlotti\Z2payMoneyField();
echo $z2payMoneyField->echoPhrase('Hello, Jpmerlotti!');
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

- [João Pedro Merlotti](https://github.com/jpmerlotti)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
