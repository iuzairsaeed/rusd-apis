<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    public function plansMeta()
    {
    	$meta  = $this->hasMany('App\PlanMeta');
    	return $meta;
    }


    public function plansMetaKeys($id)
    {
    	$imagesPath = ['icon','attach1','attach2','attach3','attach4'];

    	$planMeta = \App\PlanMeta::where('plan_id',$id)->get();
    	$arr = [];
    	foreach ($planMeta as $key => $value) {

    		if (in_array($value->plan_key, $imagesPath)) {
    			$value->plan_value = url($value->plan_value);
    		}

    		$arr[$value->plan_key] = $value->plan_value;
  

    	}
    	return $arr;
    }
}
