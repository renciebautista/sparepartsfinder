<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Device;


class DeviceController extends Controller
{
    public function index(){
    	$devices = Device::all();
    	return view('devices.index', compact('devices'));
    }
}
