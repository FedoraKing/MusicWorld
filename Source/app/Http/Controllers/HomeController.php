<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\item As Item;

class HomeController extends Controller
{
    public function Index()
    {
    	$item = Item::find(1);
		echo "de Ron hebt sin dick ger in ". $item->Name;
    }
}
