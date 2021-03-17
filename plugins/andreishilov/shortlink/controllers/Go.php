<?php

namespace AndreiShilov\ShortLink\Controllers;

use AndreiShilov\ShortLink\Models\Link;
use Cms\Classes\Controller;
use Illuminate\Http\Request;
use Event;

class Go extends Controller
{
    public function __invoke(Request $request, $code)
    {
        $link = Link::where('code', $code)->get()->first();
        if ($link) {
            Event::fire('andreishilov.shortlink.beforeRedirect', [$link]);
            return redirect($link->link, 301);
        } else {
            return $this->run('404');
        }
    }
}
