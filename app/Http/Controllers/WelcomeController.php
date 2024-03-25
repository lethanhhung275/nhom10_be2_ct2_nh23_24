<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        return view('user.index');
    }

    public function shop() {
        return view('user.shop', ['breadcrumbs' => 'shop']);
    }

    public function login() {
        return view('user.login', ['breadcrumbs' => 'login']);
    }

    public function singleProduct() {
        return view('user.single-product', ['breadcrumbs' => 'Single Product']);
    }

    public function myAccount() {
        return view('user.my-account', ['breadcrumbs' => 'My Account']);
    }

    public function contact() {
        return view('user.contact', ['breadcrumbs' => 'Contact']);
    }

    public function checkout() {
        return view('user.checkout', ['breadcrumbs' => 'Checkout']);
    }

    public function cart() {
        return view('user.cart', ['breadcrumbs' => 'Cart']);
    }

    public function blog() {
        return view('user.blog', ['breadcrumbs' => 'Blog']);
    }
}
