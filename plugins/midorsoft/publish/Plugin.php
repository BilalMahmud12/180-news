<?php namespace Midorsoft\Publish;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
        return [
            'Settings' => [
                'label'       => '180 Settings',
                'description' => 'Control Website General Settings Such As Site Title, Logo, Seo, etc ...',
                'category' => 'Settings',
                'icon' => 'icon-gears',
                'class' => 'Midorsoft\Publish\Models\Setting',
                'order' => 1,
            ],

        ];
    }
}
