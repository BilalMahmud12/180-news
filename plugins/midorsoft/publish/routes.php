<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;

use Midorsoft\Publish\Models\Setting;
use Midorsoft\Publish\Models\Category;
use Midorsoft\Publish\Models\Author;
use Midorsoft\Publish\Models\Tag;
use Midorsoft\Publish\Models\Article;
use Carbon\Carbon;

Route::get('/go/{link}', function (){
    $segments = \Request::segments();
    $slink  = $segments[1];
    $url = Article::where('short_code', $slink)->first();
    $construct = '/' . $url->slug . '/' .date( "d-m-Y", strtotime( $url->created_at ) );
    return redirect($construct);
});


Route::get('sitemap.xml', function (){
    $categories = Category::where('is_active', 1)->get();
    $articles = Article::where('is_active', 1)->get();

    return Response::view('midorsoft.publish::sitemap', [
        'categories' => $categories,
        'articles' => $articles

    ])->header('Content-Type', 'text/xml');
});


Route::get('stream', function (){
    $settings = Setting::instance();
    $live_link = $settings->live_stream_link;
    $live_src = $settings->live_stream_src;
    return [$live_link, $live_src];
});


Route::group(['prefix' => 'api'], function (){

    Route::get('/menu-items', function (){
        $query = Category::where('in_menu', 1)->where('is_active', 1)
            ->orderBy('sort_order', 'asc')
            ->select('id', 'name', 'slug' ,'sort_order')
            ->get();
        return response()->json($query);
    });

    Route::get('/other-menu-items', function (){
        $query = Category::where('in_menu', 0)->where('is_active', 1)
            ->orderBy('sort_order', 'asc')
            ->select('id', 'name', 'slug' ,'sort_order')
            ->get();
        return response()->json($query);
    });

    Route::get('/hero-slides', function () {
        $query = Article::where('is_active', 1)->where('in_slider', 1)
            ->where('is_vip_post', 0)->orderBy('created_at', 'desc')
            ->select('id', 'title', 'slug', 'image', 'author_id', 'created_at')
            ->with('author')
            ->take(8)->get();
        return response()->json($query);
    });

    Route::get('/special-reports', function() {
        $query = Article::where('is_active', 1)->where('is_vip_post', 1)->orderBy('created_at', 'desc')
            ->select('id', 'title', 'slug', 'image', 'author_id', 'created_at')
            ->with('author')
            ->take(4)->get();
        return response()->json($query);
    });

    Route::get('/latest-articles', function() {
        $query = Article::where('is_active', 1)->where('is_vip_post', 0)->orderBy('created_at', 'desc')
            ->select('id', 'title', 'slug', 'image', 'author_id', 'created_at')
            ->with('author')
            ->take(9)->get();
        return response()->json($query);
    });

});