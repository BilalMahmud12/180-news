<?php namespace Midorsoft\Publish\Models;

use Model;

/**
 * Model
 */
class Tag extends Model
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

    public $belongsToMany = [
        'articles' => [
            Article::class,
            'table' => 'midorsoft_publish_article_tag',
            'key' => 'article_id',
            'otherKey' => 'tag_id'
        ]
    ];
}
