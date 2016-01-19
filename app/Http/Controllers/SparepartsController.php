<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Item;

class SparepartsController extends Controller
{
  	public function index(Request $request){
		$request->flash();
		$items = Item::search($request);
		// dd($items);
		return view('spareparts.index',compact('items'));
  	}
}
