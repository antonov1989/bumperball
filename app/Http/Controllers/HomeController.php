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
        $products = [
            [
                'img' => '/img/theme/subox_mini_c-220x220_0.jpg',
                'name' => 'Kanger SUBOX Mini-C Starter Kit',
                'description' => 'The SUBOX Mini-C Starter Kit by Kanger consists of a KBOX Mini-C mod and a Protank 5. The KBOX Mini',
                'price' => 39.99,
            ],
            [
                'img' => '/img/theme/IJOY-Limitless-LUX-215W-TC-Dual-26650-Box-Mod-220x220_0.jpg',
                'name' => 'IJOY Limitless LUX 215W TC Dual 26650 Box Mod',
                'description' => 'IJOY Limitless LUX 215W TC Dual 26650 Box ModMod Features:  Output Wattage: 5 - 215W  Output Voltage',
                'price' => 99.99,
            ],
            [
                'img' => '/img/theme/wismec-reuleaux-rx23-220x220_0.jpg',
                'name' => 'Wismec Reuleaux RX2/3',
                'description' => ' The Reuleaux RX2/3 by Wismec is a versatile version of the RX200S. The new RX2/3 can operate',
                'price' => 39.99,
            ],
            [
                'img' => '/img/theme/subox_mini_c-220x220_0.jpg',
                'name' => 'Kanger SUBOX Mini-C Starter Kit',
                'description' => 'The SUBOX Mini-C Starter Kit by Kanger consists of a KBOX Mini-C mod and a Protank 5. The KBOX Mini',
                'price' => 59.99,
            ],
            [
                'img' => '/img/theme/IJOY-Limitless-LUX-215W-TC-Dual-26650-Box-Mod-220x220_0.jpg',
                'name' => 'IJOY Limitless LUX 215W TC Dual 26650 Box Mod (Batteries Included)',
                'description' => 'IJOY Limitless LUX 215W TC Dual 26650 Box ModMod Features:  Output Wattage: 5 - 215W  Output Voltage',
                'price' => 119.99,
            ],
            [
                'img' => '/img/theme/wismec-reuleaux-rx23-220x220_0.jpg',
                'name' => 'KaWismec Reuleaux RX2/3',
                'description' => ' The Reuleaux RX2/3 by Wismec is a versatile version of the RX200S. The new RX2/3 can operate',
                'price' => 89.99,
            ]
        ];
        
        return view('layouts.main', [
            'products' => $products
        ]);
    }
}