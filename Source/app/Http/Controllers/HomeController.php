<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
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
    public function ItemList($id)
    {
    	$data = array(
    		'categories' => Category::all(),
    		'subCategories' => SubCategory::all(),
    		'items' => DB::table('item')->where('SubCategoryId', '=', $id)->get(),
		);
		return view('ItemList', $data);
    }
    public function Item($id)
    {
	    $data = array(
    		'categories' => Category::all(),
    		'subCategories' => SubCategory::all(),
    		'item' => DB::table('item')->where('id', '=', $id)->get()[0],
		);
		return view('Item', $data);
    }
}
