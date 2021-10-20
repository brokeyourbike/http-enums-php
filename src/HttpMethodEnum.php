<?php

// Copyright (C) 2021 Ivan Stasiuk <brokeyourbike@gmail.com>.
//
// This Source Code Form is subject to the terms of the Mozilla Public
// License, v. 2.0. If a copy of the MPL was not distributed with this file,
// You can obtain one at https://mozilla.org/MPL/2.0/.

namespace BrokeYourBike\HttpEnums;

use Symfony\Component\HttpFoundation\Request;

/**
 * @author Ivan Stasiuk <brokeyourbike@gmail.com>
 *
 * @method static HttpMethod HEAD()
 * @method static HttpMethod GET()
 * @method static HttpMethod POST()
 * @method static HttpMethod PUT()
 * @method static HttpMethod DELETE()
 * @method static HttpMethod OPTIONS()
 * @method static HttpMethod TRACE()
 * @method static HttpMethod CONNECT()
 */
final class HttpMethodEnum extends \MyCLabs\Enum\Enum
{
    private const HEAD = Request::METHOD_HEAD;
    private const GET = Request::METHOD_GET;
    private const POST = Request::METHOD_POST;
    private const PUT = Request::METHOD_PUT;
    private const PATCH = Request::METHOD_PATCH;
    private const DELETE = Request::METHOD_DELETE;
    private const OPTIONS = Request::METHOD_OPTIONS;
    private const TRACE = Request::METHOD_TRACE;
    private const CONNECT = Request::METHOD_CONNECT;
}
