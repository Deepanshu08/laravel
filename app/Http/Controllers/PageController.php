<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
    	return view('layout');
    }
    public function product()
    {
    	$products_name=['Smartphone','laptops','Network Devices','Routers','Cars'];
        $products_id=[1,2,3,4,5];
        $products_desc=['This is smartphone','This is laptop','This is Networking Devices','This is Routers','This is Cars'];
        $products_price=[1000,2000,3000,4000,5000];
    	return view('product',['products_name'=>$products_name,'products_id'=>$products_id,'products_desc'=>$products_desc,'products_price'=>$products_price,]);
    }
}
