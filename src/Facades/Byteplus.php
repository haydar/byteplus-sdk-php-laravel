<?php

namespace BytePlus\ByteplusSdkPhpLaravel\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * @method static V4Curl Cdn() Returns an authenticated client for the Cdn service.
 * @method static V4Curl Vod() Returns an authenticated client for the Vod service.
 * @method static V4Curl Sms() Returns an authenticated client for the Sms service.
 * @method static V4Curl Live() Returns an authenticated client for the Live service.
 * @method static V4Curl Iam() Returns an authenticated client for the Iam service.
 *
 * @see \App\Services\V4Service
 */
class Byteplus extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \BytePlus\ByteplusSdkPhpLaravel\ByteplusSdkPhpLaravel::class;
    }
}
