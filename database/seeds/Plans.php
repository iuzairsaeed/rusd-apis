<?php

use Illuminate\Database\Seeder;
use App\Plan;
use App\PlanMeta;


class Plans extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $planMoneyMarket = Plan::updateOrCreate(
        	['name' => 'Money Market'],
        	['description' => 'Lorem ipsum dolor sit amet,consectetuer adipiscing elit, sed diamnonummy nibh.' , 'type'=>'investment']
        );


        $planSukuk = Plan::updateOrCreate(
        	['name' => 'Sukuk'],
			['description' => 'Lorem ipasum dolor sit amet,consectetuer adipiscing elit, sed diamnonummy nibh.']
		);

		$planRealEstate = Plan::updateOrCreate(
        	['name' => 'Real Estate'],
			['description' => 'Lorem ipasum dolor sit amet,consectetuer adipiscing elit, sed diamnonummy nibh.']
		);


		// plans meta


		$arrMeta = [
			'icon' 		=> 'images/assets/plans/money_market_icon.png',
			'heading' 	=> 'Want to review these documents',
			'attach1' 	=> 'images/assets/plans/money_market_icon.png',
			'attach2' 	=> 'images/assets/plans/money_market_icon.png',
			'attach3' 	=> 'images/assets/plans/money_market_icon.png',
			'attach4' 	=> 'images/assets/plans/money_market_icon.png'
			// 'plan_id' => $planMoneyMarket->id,
		];

		foreach ($arrMeta as $key => $value) {
			$mm = PlanMeta::where('plan_key' , $key)->where('plan_id',$planMoneyMarket->id)->first();
			if (empty($mm)) {
				$mm = new PlanMeta;
			}

			$mm->plan_key = $key;
			$mm->plan_id  = $planMoneyMarket->id;
			$mm->plan_value  = $value;
			$mm->save();

		}

		// sukkuk
		$arrMeta = [
			'icon' 		=> 'images/assets/plans/money_market_icon.png',
			'heading' 	=> 'Want to review these documents',
			'attach1' 	=> 'images/assets/plans/money_market_icon.png',
			'attach2' 	=> 'images/assets/plans/money_market_icon.png',
			'attach3' 	=> 'images/assets/plans/money_market_icon.png',
			'attach4' 	=> 'images/assets/plans/money_market_icon.png'
			// 'plan_id' => $planMoneyMarket->id,
		];

		foreach ($arrMeta as $key => $value) {
			$sukkuk = PlanMeta::where('plan_key' , $key)->where('plan_id',$planSukuk->id)->first();
			if (empty($sukkuk)) {
				$sukkuk = new PlanMeta;
			}

			$sukkuk->plan_key = $key;
			$sukkuk->plan_id  = $planSukuk->id;
			$sukkuk->plan_value  = $value;
			$sukkuk->save();

		}



		// sukkuk
		$arrMeta = [
			'icon' 		=> 'images/assets/plans/money_market_icon.png',
			'heading' 	=> 'Want to review these documents',
			'attach1' 	=> 'images/assets/plans/money_market_icon.png',
			'attach2' 	=> 'images/assets/plans/money_market_icon.png',
			'attach3' 	=> 'images/assets/plans/money_market_icon.png',
			'attach4' 	=> 'images/assets/plans/money_market_icon.png'
			// 'plan_id' => $planMoneyMarket->id,
		];

		foreach ($arrMeta as $key => $value) {
			$realEstate = PlanMeta::where('plan_key' , $key)->where('plan_id',$planRealEstate->id)->first();
			if (empty($realEstate)) {
				$realEstate = new PlanMeta;
			}

			$realEstate->plan_key = $key;
			$realEstate->plan_id  = $planRealEstate->id;
			$realEstate->plan_value  = $value;
			$realEstate->save();

		}

		
		

		
    }
}
