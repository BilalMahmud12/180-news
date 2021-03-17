<?php

namespace AndreiShilov\ShortLink\Classes;

class Base64UID
{
    const CHARS = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_-';

    public static function generate(int $length = 3): string
    {
        $uid = '';
        while ($length-- > 0) {
            $uid .= self::CHARS[random_int(0, 63)];
        }

        return $uid;
    }
}