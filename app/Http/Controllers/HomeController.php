<?php
/**
 * Created by PhpStorm.
 * User: Pushok
 * Date: 05.09.2016
 * Time: 18:43
 */

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function index()
    {
        return view('home.index', [
            'test' => 'free'
        ]);
    }

    public function search()
    {
        return view('home.search');
    }

    public function faq()
    {
        return view('home.faq');
    }

    public function price()
    {
        return view('home.price');
    }

    public function contacts()
    {
        return view('home.contacts');
    }
}