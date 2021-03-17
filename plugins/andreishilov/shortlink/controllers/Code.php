<?php

namespace AndreiShilov\ShortLink\Controllers;

use AndreiShilov\ShortLink\Classes\Base64UID;
use AndreiShilov\ShortLink\Models\Settings;
use Backend\Classes\Controller;

class Code extends Controller
{
    public $requiredPermissions = ['andreishilov.shortlink.edit'];

    public function index()
    {
        return \Response::json(['code' => Base64UID::generate(Settings::get('code_length', 3))]);
    }
}
