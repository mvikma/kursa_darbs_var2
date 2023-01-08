<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function blog(){
        return view('pages.blog');
    }
    public function shop(){
        return view('pages.shop');
    }
    public function cart(){
        return view('pages.cart');
    }
    public function team(){
        return view('pages.team');
    }
    public function juice(){
        return view('pages.products.juice');
    }
    public function candy(){
        return view('pages.products.candy');
    }
    public function berry(){
        return view('pages.products.berry');
    } 
    public function admin(){
        return view('pages.admin');
    } 
    public function login(){
        return view('pages.login');
    }
    public function product_form(){
        return view('pages.product_form');
    }
    public function blog_form(){
        return view('pages.blog_form');
    }
    public function admin_form(){
        return view('pages.admin_form');
    }
    public function admin_edit(){
        return view('pages.admin_edit');
    }
    public function blog_edit(){
        return view('pages.blog_edit');
    }
    public function product_edit(){
        return view('pages.product_edit');
    }
}
