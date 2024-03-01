<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($theme)
    {
        $products = [];

        switch ($theme) {
            case 'gadgets':
                $products = ['Smartphone', 'Laptop', 'Smartwatch'];
                break;
            case 'books':
                $products = ['Fantasy Novel', 'Self-Help Book', 'Science Fiction Book'];
                break;
            case 'movies':
                $products = ['Action Movie', 'Comedy Movie', 'Drama Movie'];
                break;
            case 'anime':
                $products = ['Shonen Anime', 'Shojo Anime', 'Seinen Anime'];
                break;
            case 'restaurants':
                $products = ['Italian Restaurant', 'Mexican Restaurant', 'Japanese Restaurant'];
                break;
            default:
                abort(404, 'Theme not found');
        }

        return view('products.index', compact('products', 'theme'));
    }
}
