<?php
/**
 * Created by PhpStorm.
 * User: bandit
 * Date: 27.06.17
 * Time: 20:46
 */

namespace App\Http\Controllers;

class VideoController extends Controller
{
    public function index()
    {
        return view('video.index');
    }
}