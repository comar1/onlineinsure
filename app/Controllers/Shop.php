<?php

namespace App\Controllers;

class Shop extends BaseController
{
    public function index()
    {
        return view('shop');
    }

    public function product($type, $product_id)
    {
        echo '<h2>This is a Product: '.$type.' with an id '.$product_id.'</h2>' ;
        //return view('product');
    }

    protected function adminCheck()
    {
        echo 'This is a protected area';
    }
    
}
