<?php

namespace BytePlus\ByteplusSdkPhpLaravel;

use Byteplus\Base\V4Curl;
use Byteplus\Service\Cdn;
use Byteplus\Service\Iam;
use Byteplus\Service\Live;
use Byteplus\Service\Sms;
use Byteplus\Service\Vod\Vod;

class BytePlusSdkPhpLaravel
{
    public static function Cdn(): V4Curl
    {
        return self::authenticate(Cdn::getInstance());
    }

    public static function Vod(): V4Curl
    {
        return self::authenticate(Vod::getInstance());
    }

    public static function Sms(): V4Curl
    {
        return self::authenticate(Sms::getInstance());
    }

    public static function Live(): V4Curl
    {
        return self::authenticate(Live::getInstance());
    }

    public static function Iam(): V4Curl
    {
        return self::authenticate(Iam::getInstance());
    }

    private static function authenticate(V4Curl $service): V4Curl
    {
        $service->setAccessKey(config('byteplus.access_key'));
        $service->setSecretKey(config('byteplus.secret_key'));

        return $service;
    }
}
