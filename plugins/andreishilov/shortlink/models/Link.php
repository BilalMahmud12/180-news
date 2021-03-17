<?php

namespace AndreiShilov\ShortLink\Models;

use October\Rain\Database\Traits\Validation;

/**
 * Link
 */
class Link extends \Model
{
    use Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'andreishilov_shortlink_links';

    public $attributeNames = [
        'code' => 'andreishilov.shortlink::lang.models.link.attributes.code',
        'link' => 'andreishilov.shortlink::lang.models.link.attributes.link',
    ];

    public $rules = [
        'code' => 'required|unique:andreishilov_shortlink_links,code|between:3,7|regex:/^[0-9a-zA-z-_]+$/',
        'link' => 'required|unique:andreishilov_shortlink_links,link',
    ];
}
