<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    

    public function index(){


        return view('admin.home.home');

    }


    //all products
    public function all_products(){

        return view('admin.pages.products.all_products');

    }

    //add new products
    public function add_new_products(){

        return view('admin.pages.products.add_new_products');

    }

    //product categories
    public function product_categories(){

        return view('admin.pages.products.product_categories');

    }

    //eCommerce settings
    public function ecommerce_settings(){

        return view('admin.pages.products.ecommerce_settings');

    }

}
