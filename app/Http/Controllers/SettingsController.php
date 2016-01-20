<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Setting;
use Session;

class SettingsController extends Controller
{
    public function index(){
        $settings = Setting::find(1);
    	return view('settings.index',compact('settings'));
    }

    public function store(Request $request){
    	$this->validate($request, [
            'app_name' => 'required|max:100'
        ]);

        \DB::beginTransaction();

        try {
            $settings = Setting::find(1);
            if(!empty($settings)){
                $settings->app_name = $request->app_name;
                $settings->update();
            }else{
                $settings = new Setting;
                $settings->app_name = $request->app_name;
                $settings->save();
            }
            

            \DB::commit();

            Session::flash('flash_message', 'Settings successfully updated!');
            return redirect()->back();

        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back();
        }
    }
}
