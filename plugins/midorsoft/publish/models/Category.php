<?php namespace Midorsoft\Publish\Models;

use Midorsoft\Publish\Models\Article;
use Model;


/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\Sluggable;

    protected $slugs = ['slug' => 'name'];
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'midorsoft_publish_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $hasMany = [
        'articles' => [
            Article::class,
            'key' => 'category_id',
        ]
    ];

    public function filteredArticles()
    {
        return $this->hasMany(Article::class, 'category_id')->where('is_active', 1)->orderBy('created_at', 'desc');
    }

}
