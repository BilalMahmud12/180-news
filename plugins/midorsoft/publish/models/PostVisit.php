<?php namespace Midorsoft\Publish\Models;

use Model;

/**
 * Model
 */
class PostVisit extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'midorsoft_publish_post_visits';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
