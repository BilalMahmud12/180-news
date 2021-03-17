<?php

namespace AndreiShilov\ShortLink\Models;

use Model;
use October\Rain\Database\Traits\Validation;

class Settings extends Model
{
    use Validation;

    public $implement = ['System.Behaviors.SettingsModel'];

    public $settingsCode = 'andreishilov_shortlink_settings';

    public $settingsFields = 'fields.yaml';

    public $rules = [
        'code_length' => 'integer|between:3,7',
    ];

    public $attributeNames = [
        'code_length' => 'andreishilov.shortlink::lang.models.settings.attributes.code_length',
    ];
}