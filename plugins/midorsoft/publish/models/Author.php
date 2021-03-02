<?php namespace Midorsoft\Publish\Models;

use Model;

/**
 * Model
 */
class Author extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'midorsoft_publish_article_authors';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'articles' => [
            Article::class,
            'key' => 'author_id'
        ],
    ];
}
