<?php

namespace App\Http\Controllers\Frontend\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Main',
            'mods' => '',
            'products' => [
                [
                    'product_name' => 'Nike Air Huarache Premium',
                    'description' => "When it fits this good and looks this great, it doesn't need a Swoosh design. With its stretchy, hug your foot fabric upper, futuristic heel cage and Nike Air cushioning, the Huarache brings you stylish utility and stripped-away branding for a modern update inspired by the cycling commuter lifestyle. But wherever you wear it, the Huarache is bragging rights for your feet.",
                    'image' => 'nike-air-hurache.webp',
                    'price' => 'Rp. 2.000.000'
                ],
                [
                    'product_name' => 'Nike Air Huarache Premium',
                    'description' => "When it fits this good and looks this great, it doesn't need a Swoosh design. With its stretchy, hug your foot fabric upper, futuristic heel cage and Nike Air cushioning, the Huarache brings you stylish utility and stripped-away branding for a modern update inspired by the cycling commuter lifestyle. But wherever you wear it, the Huarache is bragging rights for your feet.",
                    'image' => 'nike-air-hurache.webp',
                    'price' => 'Rp. 2.000.000'
                ],
                [
                    'product_name' => 'Nike Air Huarache Premium',
                    'description' => "When it fits this good and looks this great, it doesn't need a Swoosh design. With its stretchy, hug your foot fabric upper, futuristic heel cage and Nike Air cushioning, the Huarache brings you stylish utility and stripped-away branding for a modern update inspired by the cycling commuter lifestyle. But wherever you wear it, the Huarache is bragging rights for your feet.",
                    'image' => 'nike-air-hurache.webp',
                    'price' => 'Rp. 2.000.000'
                ],
                [
                    'product_name' => 'Nike Air Huarache Premium',
                    'description' => "When it fits this good and looks this great, it doesn't need a Swoosh design. With its stretchy, hug your foot fabric upper, futuristic heel cage and Nike Air cushioning, the Huarache brings you stylish utility and stripped-away branding for a modern update inspired by the cycling commuter lifestyle. But wherever you wear it, the Huarache is bragging rights for your feet.",
                    'image' => 'nike-air-hurache.webp',
                    'price' => 'Rp. 2.000.000'
                ],
                [
                    'product_name' => 'Nike Air Huarache Premium',
                    'description' => "When it fits this good and looks this great, it doesn't need a Swoosh design. With its stretchy, hug your foot fabric upper, futuristic heel cage and Nike Air cushioning, the Huarache brings you stylish utility and stripped-away branding for a modern update inspired by the cycling commuter lifestyle. But wherever you wear it, the Huarache is bragging rights for your feet.",
                    'image' => 'nike-air-hurache.webp',
                    'price' => 'Rp. 2.000.000'
                ],
                [
                    'product_name' => 'Nike Air Huarache Premium',
                    'description' => "When it fits this good and looks this great, it doesn't need a Swoosh design. With its stretchy, hug your foot fabric upper, futuristic heel cage and Nike Air cushioning, the Huarache brings you stylish utility and stripped-away branding for a modern update inspired by the cycling commuter lifestyle. But wherever you wear it, the Huarache is bragging rights for your feet.",
                    'image' => 'nike-air-hurache.webp',
                    'price' => 'Rp. 2.000.000'
                ],
            ]
        ];

        return view('frontend.home.index', $data);
    }
}
