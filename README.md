# http-enums

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/http-enums-php)](https://github.com/brokeyourbike/http-enums-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/http-enums/downloads)](https://packagist.org/packages/brokeyourbike/http-enums)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/http-enums-php/blob/main/LICENSE)

[![Maintainability](https://api.codeclimate.com/v1/badges/cb91278476b2c640e016/maintainability)](https://codeclimate.com/github/brokeyourbike/http-enums-php/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/cb91278476b2c640e016/test_coverage)](https://codeclimate.com/github/brokeyourbike/http-enums-php/test_coverage)
[![tests](https://github.com/brokeyourbike/http-enums-php/actions/workflows/tests.yml/badge.svg)](https://github.com/brokeyourbike/http-enums-php/actions/workflows/tests.yml)

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

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/http-enums-php/blob/main/LICENSE)
