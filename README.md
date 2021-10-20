# http-enums-php

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/http-enums-php)](https://github.com/brokeyourbike/http-enums-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/http-enums-php/downloads)](https://packagist.org/packages/brokeyourbike/http-enums-php)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/http-enums-php/blob/main/LICENSE)

[![ci](https://github.com/brokeyourbike/http-enums-php/actions/workflows/ci.yml/badge.svg)](https://github.com/brokeyourbike/http-enums-php/actions/workflows/ci.yml)
[![codecov](https://codecov.io/gh/brokeyourbike/http-enums-php/branch/main/graph/badge.svg?token=ImcgnxzGfc)](https://codecov.io/gh/brokeyourbike/http-enums-php)
[![Type Coverage](https://shepherd.dev/github/brokeyourbike/http-enums-php/coverage.svg)](https://shepherd.dev/github/brokeyourbike/http-enums-php)

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
    if (HttpMethodEnum::GET()->equals($method)) {
        //
    }
}
```

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/http-enums-php/blob/main/LICENSE)
