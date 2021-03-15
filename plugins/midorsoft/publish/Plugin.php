<?php namespace Midorsoft\Publish;

use Midorsoft\Publish\Models\Article;
use System\Classes\PluginBase;
use Carbon\Carbon;


class Plugin extends PluginBase
{

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'arabicDate' => function ($date_time, $format) {
                    $carbon = new Carbon($date_time);
                    setlocale(LC_ALL, 'ars.UTF-8');
                    return $carbon->formatLocalized($format);
                },
            ],
        ];
    }
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
