<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\item As Item;
use App\Category As Category;
use App\SubCategory As SubCategory;

class HomeController extends Controller
{
    public function Index()
    {
    	$data = array(
    		'categories' => Category::all(),
    		'subCategories' => SubCategory::all(),
		);
    	return view('Index', $data);
    }
}
