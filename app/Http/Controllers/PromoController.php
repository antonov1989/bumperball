<?php
/**
 * Created by PhpStorm.
 * User: bandit
 * Date: 28.06.17
 * Time: 21:56
 */

namespace App\Http\Controllers;

class PromoController extends Controller
{
    public function index()
    {
        return view('promo.index');
    }
}