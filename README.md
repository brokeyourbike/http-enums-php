# http-methods-enum-php

[![Latest Stable Version](https://img.shields.io/github/v/release/brokeyourbike/http-methods-enum-php)](https://github.com/brokeyourbike/http-methods-enum-php/releases)
[![Total Downloads](https://poser.pugx.org/brokeyourbike/http-methods-enum-php/downloads)](https://packagist.org/packages/brokeyourbike/http-methods-enum-php)
[![License: MPL-2.0](https://img.shields.io/badge/license-MPL--2.0-purple.svg)](https://github.com/brokeyourbike/http-methods-enum-php/blob/main/LICENSE)

[![ci](https://github.com/brokeyourbike/http-methods-enum-php/actions/workflows/ci.yml/badge.svg)](https://github.com/brokeyourbike/http-methods-enum-php/actions/workflows/ci.yml)
[![codecov](https://codecov.io/gh/brokeyourbike/http-methods-enum-php/branch/main/graph/badge.svg?token=ImcgnxzGfc)](https://codecov.io/gh/brokeyourbike/http-methods-enum-php)
[![Type Coverage](https://shepherd.dev/github/brokeyourbike/http-methods-enum-php/coverage.svg)](https://shepherd.dev/github/brokeyourbike/http-methods-enum-php)

HTTP methods enum for PHP

## Installation

```bash
composer require brokeyourbike/http-methods-enum
```

## Usage

```php
use BrokeYourBike\HttpEnums\HttpMethodEnum;

function performRequest(HttpMethodEnum $method, string $url)
{
    //
}
```

## License
[Mozilla Public License v2.0](https://github.com/brokeyourbike/http-methods-enum-php/blob/main/LICENSE)
