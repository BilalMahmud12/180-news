<?php namespace Midorsoft\Publish\Models;

use Model;
use Midorsoft\Publish\Models\Article;

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

    public static function recentArticles()
    {
        $categories = Category::select('id')->get();
        foreach ($categories as $category) {
//            $posts = Category::where('id', $category->id)->with(['articles' => function($q){
//                $q->take(3);
//            }])->orderBy('created_at', 'desc')->get();

            return $category->id;
        }

        //return $categories;

    }



}
