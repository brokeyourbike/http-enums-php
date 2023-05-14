# http-enums

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/http-enums-php)](https://github.com/brokeyourbike/http-enums-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/http-enums/downloads)](https://packagist.org/packages/brokeyourbike/http-enums)
[![Maintainability](https://api.codeclimate.com/v1/badges/cb91278476b2c640e016/maintainability)](https://codeclimate.com/github/brokeyourbike/http-enums-php/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/cb91278476b2c640e016/test_coverage)](https://codeclimate.com/github/brokeyourbike/http-enums-php/test_coverage)

HTTP related enums for PHP

## Installation

```bash
composer require brokeyourbike/http-enums
```

## Usage

```php
use BrokeYourBike\HttpEnums\HttpMethodEnum;

function performRequest(HttpMethodEnum $method, string $url)
{
    if ($method === HttpMethodEnum::GET) {
        //
    }
}
```

## Authors
- [Ivan Stasiuk](https://github.com/brokeyourbike) | [Twitter](https://twitter.com/brokeyourbike) | [LinkedIn](https://www.linkedin.com/in/brokeyourbike) | [stasi.uk](https://stasi.uk)

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/http-enums-php/blob/main/LICENSE)
