<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex() {
        return view('home');
    }

    public function showArray() {
        $array = [
            ['id' => 1, 'title' => 'продукт 1', 'price' => 500, 'path' => '../images/card.png'],
            ['id' => 2, 'title' => 'продукт 2', 'price' => 600, 'path' => '../images/card.png'],
            ['id' => 3, 'title' => 'продукт 3', 'price' => 200, 'path' => '../images/card.png'],
            ['id' => 4, 'title' => 'продукт 4', 'price' => 400, 'path' => '../images/card.png'],
            ['id' => 5, 'title' => 'продукт 5', 'price' => 300, 'path' => '../images/card.png'],
            ['id' => 6, 'title' => 'продукт 6', 'price' => 700, 'path' => '../images/card.png'],
            ['id' => 7, 'title' => 'продукт 7', 'price' => 900, 'path' => '../images/card.png'],
            ['id' => 8, 'title' => 'продукт 8', 'price' => 800, 'path' => '../images/card.png'],
            ['id' => 9, 'title' => 'продукт 9', 'price' => 1000, 'path' => '../images/card.png']
        ];
        return view('array', compact('array'));
    }
}
