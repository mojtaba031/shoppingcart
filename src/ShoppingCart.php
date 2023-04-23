<?php

namespace Mir\ShoppingCart;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Cookie;

class ShoppingCart
{
    private $cookie_time;
    private $cookie_name;
    private $cookie_id;

    public function __construct() {
        $this->cookie_name = "cart";
        $this->cookie_time = 86400;
    }

    public function hasCookie( $text  ){
        if( Cookie::get( $this->cookie_name ) !== null ){
            return true;
        } else {
            return false;
        }
    }

    public function getCookie(){
        return Cookie::get( $this->cookie_name );
    }

    public function addCookie( $time = $this->cookie_time ){
        $CookieID = Str::random(10);
        Cookie::queue( $this->cookie_name, $CookieID, $time );
    }
}
