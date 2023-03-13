<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
	public function index()
	{
		$title = 'Products';
		$x = '<h1>' . $title . '</h1>';
		$y = '<h2>' . $title . '</h2>';
		$z = '<h3>' . $title . '</h3>';
		return view('products.index', compact('x', 'y', 'z', 'title'));
	}
}
