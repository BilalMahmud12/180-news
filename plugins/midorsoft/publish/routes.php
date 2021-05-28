<?php

use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Jenssegers\Date\Date;
use Midorsoft\Publish\Models\Article;
use Midorsoft\Publish\Models\Category;

Route::get('/go/{link}', function (){
    $segments = \Request::segments();
    $slink  = $segments[1];
    $url = Article::where('short_code', $slink)->first();
    $construct = '/' . $url->slug . '/' .date( "d-m-Y", strtotime( $url->created_at ) );
    return redirect($construct);
});


//Route::get('date', function (){
//    $date = new Date();
//    $fmt = datefmt_create(
//        'ars',
//        IntlDateFormatter::LONG ,
//        IntlDateFormatter::SHORT,
//        'Asia/Istanbul',
//        IntlDateFormatter::GREGORIAN,
//
//    );
//    return datefmt_format($fmt, $date);
//    //return strftime("%e %B %Y %A", time());
//});

Route::get('sitemap.xml', function (){
    $categories = Category::where('is_active', 1)->get();
    $articles = Article::where('is_active', 1)->get();

    return Response::view('midorsoft.publish::sitemap', [
        'categories' => $categories,
        'articles' => $articles

    ])->header('Content-Type', 'text/xml');
});
