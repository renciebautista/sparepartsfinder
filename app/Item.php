<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $timestamps = false;

    public static function search($request){
    	return self::where('part_no', 'LIKE' ,"%$request->part_no%")
			->where('description','LIKE' ,"%$request->desc%")
			->orderBy('part_no')
			->get();
    }
}
