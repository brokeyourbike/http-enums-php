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
 * @method static HttpMethodEnum HEAD()
 * @method static HttpMethodEnum GET()
 * @method static HttpMethodEnum POST()
 * @method static HttpMethodEnum PUT()
 * @method static HttpMethodEnum DELETE()
 * @method static HttpMethodEnum OPTIONS()
 * @method static HttpMethodEnum TRACE()
 * @method static HttpMethodEnum CONNECT()
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
