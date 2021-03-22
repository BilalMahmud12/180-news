<?php

use Illuminate\Support\Facades\Route;
use Jenssegers\Date\Date;
use Midorsoft\Publish\Models\Article;

Route::get('/go/{link}', function (){
    $segments = \Request::segments();
    $slink  = $segments[1];
    $url = Article::where('short_code', $slink)->first();
    $construct = '/' . $url->slug . '/' .date( "d-m-Y", strtotime( $url->created_at ) );
    return redirect($construct);
});


Route::get('date', function (){
    $date = new Date();
    $fmt = datefmt_create(
        'ars',
        IntlDateFormatter::LONG ,
        IntlDateFormatter::SHORT,
        'Asia/Istanbul',
        IntlDateFormatter::GREGORIAN,

    );
    return datefmt_format($fmt, $date);
    //return strftime("%e %B %Y %A", time());
});