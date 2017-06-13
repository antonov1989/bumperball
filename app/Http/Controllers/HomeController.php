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
        return view('layouts.main');
    }
}