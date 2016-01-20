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

  	public function logdevice(Request $request)
    {
        $uid = $request->uid;
        $status = $request->status;
        
        $device = Device::where('uid',$uid)->first();
        if(!empty($device)){
        	$device->status = $status;
        	$device->update();

        	$msg = 'Device status updated';
        }else{
        	$msg = 'Device not found';
        }

        return response()->json(['msg' => $msg],200);
    }
}
