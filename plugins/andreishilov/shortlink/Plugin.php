<?php

namespace AndreiShilov\ShortLink;

use Backend\Facades\Backend;
use Illuminate\Support\Facades\Route;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => 'andreishilov.shortlink::lang.plugin.name',
            'description' => 'andreishilov.shortlink::lang.plugin.description',
            'author' => 'andreishilov.shortlink::lang.plugin.author',
            'icon' => 'icon-link'
        ];
    }

    public function registerPermissions()
    {
        return [
            'andreishilov.shortlink.settings' => [
                'label' => 'andreishilov.shortlink::lang.permissions.settings.name',
                'tab' => 'andreishilov.shortlink::lang.plugin.name',
            ],
            'andreishilov.shortlink.edit' => [
                'label' => 'andreishilov.shortlink::lang.permissions.edit.name',
                'tab' => 'andreishilov.shortlink::lang.plugin.name',
            ]
        ];
    }

    public function registerSettings()
    {
        return [
            'config' => [
                'category' => 'andreishilov.shortlink::lang.plugin.name',
                'label' => 'andreishilov.shortlink::lang.settings.config.name',
                'description' => 'andreishilov.shortlink::lang.settings.config.description',
                'icon' => 'icon-link',
                'class' => 'AndreiShilov\ShortLink\Models\Settings',
                'permissions' => ['andreishilov.shortlink.settings'],
            ]
        ];
    }

    public function registerNavigation()
    {
        return [
            'shortlink' => [
                'label' => 'andreishilov.shortlink::lang.plugin.name',
                'url' => Backend::url('andreishilov/shortlink/links'),
                'icon' => 'icon-link',
                'iconSvg' => '/plugins/andreishilov/shortlink/assets/img/shortlink-icon.svg',
                'permissions' => ['andreishilov.shortlink.edit'],
                'sideMenu' => [
                    'links' => [
                        'label' => 'andreishilov.shortlink::lang.models.link.name_plural',
                        'url' => Backend::url('andreishilov/shortlink/links'),
                        'icon' => 'icon-link',
                        'permissions' => ['andreishilov.shortlink.edit'],
                    ],
                ]
            ]
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'AndreiShilov\ShortLink\FormWidgets\ShortLinkCode' => [
                'label' => 'Short Link Code',
                'code' => 'shortlinkcode'
            ]
        ];
    }

    public function boot()
    {
        Route::get('/go/{code}', 'AndreiShilov\ShortLink\Controllers\Go')->where(['code' => '[0-9a-zA-z_-]+']);
    }
}
