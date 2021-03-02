<?php namespace Midorsoft\Publish\Models;

use Model;

/**
 * Model
 */
class Setting extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = [
        'System.Behaviors.SettingsModel',
    ];

    public $settingsCode = 'midorsoft_publisher_settings';

    public $settingsFields = 'fields.yaml';
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'midorsoft_publish_settings';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
