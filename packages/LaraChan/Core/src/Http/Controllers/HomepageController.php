<?php

namespace LaraChan\Core\Http\Controllers;

use LaraChan\Core\Http\LaraChanBaseController;


class HomepageController extends LaraChanBaseController
{

    public function homepage()
    {
        return view("larachan::homepage", [
            "siteName" => env('APP_NAME'),
            "address" => config('LaraChan.onionAddress') ?? env('APP_URL'),
            "about" => config('LaraChan.about'),
        ]);        
    }
}
