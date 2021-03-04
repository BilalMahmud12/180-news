<?php namespace Midorsoft\Publish\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'midorsoft_publish_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $belongsToMany = [
        'articles' => [
            Article::class,
            'table' => 'midorsoft_publish_article_category',
            'key' => 'category_id',
            'otherKey' => 'article_id'
        ],
    ];
}
