<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Jenssegers\Date\Date;
use Midorsoft\Publish\Models\Article;
use Midorsoft\Publish\Models\Category;
use Midorsoft\Publish\Models\Setting;



use Config;

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
