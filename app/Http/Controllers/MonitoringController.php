<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Device;

class MonitoringController extends Controller
{
  	public function index(){
  		$devices = Device::all();
    	return view('monitoring.index',compact('devices'));
  	}

  	public function devices(){
  		$devices = Device::all();
  		return response()->json($devices);
  	}
}
