# Byteplus SDK Laravel 

[![Latest Version on Packagist](https://img.shields.io/packagist/v/haydar/byteplus-sdk-php-laravel.svg?style=flat-square)](https://packagist.org/packages/haydar/byteplus-sdk-php-laravel)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/haydar/byteplus-sdk-php-laravel/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/haydar/byteplus-sdk-php-laravel/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/haydar/byteplus-sdk-php-laravel/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/haydarsahin/byteplus-sdk-php-laravel/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/haydar/byteplus-sdk-php-laravel.svg?style=flat-square)](https://packagist.org/packages/haydarsahin/byteplus-sdk-php-laravel)


## Installation

You can install the package via composer:

```bash
composer require haydar/byteplus-sdk-php-laravel
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="byteplus-config"
```

This is the contents of the published config file:

```php
return [
    'access_key' => env('BYTEPLUS_ACCESS_KEY'),
    'secret_key' => env('BYTEPLUS_SECRET_KEY'),
];

```

## Get Started

Add following credentials to your env file.

```
    BYTEPLUS_ACCESS_KEY=
    BYTEPLUS_SECRET_KEY=
```

```php
    $client = Byteplus::Vod();

    $vid = "123453";
    $expire = 6000000; // Sign Expire
    
    $req = new VodGetPlayInfoRequest();
    $req->setVid($vid);
    $response = $client->getPlayAuthToken($req, $expire);
    try {
        echo $response;
    } catch (Exception $e) {
        echo $e, "\n";
    } catch (Throwable $e) {
        echo $e, "\n";
    }
```


## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Haydar ŞAHİN](https://github.com/haydarsahin)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
