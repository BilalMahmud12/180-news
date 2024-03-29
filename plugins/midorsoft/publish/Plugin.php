<?php namespace Midorsoft\Publish;

use Illuminate\Database\Eloquent\Builder;
use IntlDateFormatter;
use Midorsoft\Publish\Models\Article;
use System\Classes\PluginBase;
use Carbon\Carbon;


class Plugin extends PluginBase
{
    public function boot()
    {
        Builder::macro('whereLike', function(string $attribute, string $searchTerm) {
            return $this->orWhere($attribute, 'LIKE', "%{$searchTerm}%");
        });
    }

    public function registerMarkupTags()
    {
        return [
            'filters' => [
                'arabicDate' => function ($date_time) {
                    $date = $date_time->getTimestamp();
                    $fmt = datefmt_create(
                        'ars',
                        IntlDateFormatter::FULL,
                        IntlDateFormatter::SHORT,
                        'Asia/Istanbul',
                        IntlDateFormatter::GREGORIAN,
                    );
                    return datefmt_format($fmt, $date);
                },

                'rawURL' => function($slug) {
                    return rawurlencode($slug);
                }
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
