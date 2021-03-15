<?php namespace Midorsoft\Publish\Models;

use Midorsoft\Publish\Controllers\Articles;
use Model;

/**
 * Model
 */
class Article extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'midorsoft_publish_articles';
    public $jsonable = ['image', 'references'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'title' => 'required',
        'slug'  => 'required',
        'categories' => 'required',
        'author' => 'required',
        'image' => 'required'
    ];

    public $belongsTo = [
        'author' => [
            Author::class,
            'key' => 'author_id'
        ],
        'category' => [
            Category::class,
            'key' => 'category_id'
        ]
    ];

    public $belongsToMany = [
        'tags' => [
            Tag::class,
            'table' => 'midorsoft_publish_article_tag',
            'key' => 'article_id',
            'otherKey' => 'tag_id'
        ]
    ];

    public static function filteredArticles()
    {
        $categories = Category::select('id', 'name')->get();
        foreach ($categories as $category) {
            $categories->map(function ($article){
                return $article;
            });
        }

    }
}
