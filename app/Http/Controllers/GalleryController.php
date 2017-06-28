<?php
/**
 * Created by PhpStorm.
 * User: bandit
 * Date: 27.06.17
 * Time: 20:46
 */

namespace App\Http\Controllers;

class GalleryController extends Controller
{
    private $galleryImgDir = '/img/balls/';
    
    public function index()
    {
        $folder = public_path() . $this->galleryImgDir;
        $gallary = scandir($folder);
        
        $gallary = array_filter($gallary, function($item){
            return strlen($item) > 4; 
        });
            
        return view('gallery.index', array(
            'gallary' => $gallary, 
            'galletyImgDir' => $this->galleryImgDir 
        ));
    }
}