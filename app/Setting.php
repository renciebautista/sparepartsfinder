<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
	public $timestamps = false;

    public static function appName(){
    	$setting = self::find(1);
    	$name = '';
    	if(!empty($setting)){
    		$name = $setting->app_name;
    	}
    	return $name;
    }
}
