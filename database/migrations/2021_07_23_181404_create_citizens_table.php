<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitizensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $experience = [
            'Slabs 0',
            '1-5 years',
            'Over 5',
        ];

        $fund = [
            'Allowance/ Spousal Income',
            'Disability/ Severance/ Umemployment',
            'Income from Employment',
            'Inheritance Gift',
            'Market Trading Profit',
            'Pension/ Government Retirement',
            'Benefit',
        ]; 

        Schema::create('citizens', function (Blueprint $table) use ($experience, $fund) {
            $table->id();
            $table->string('country');
            $table->double('nic');
            $table->date('expiry_date');    
            $table->bigInteger('passport_no');    
            $table->boolean('tax_payer')->default(false);    
            $table->bigInteger('tax_no')->nullable();    
            $table->integer('net_income');    
            $table->enum('source_of_fund', $fund );    
            $table->enum('bank_deposit', $experience);
            $table->enum('listed_stocks', $experience);
            $table->enum('private_equities', $experience);
            $table->enum('real_estate', $experience);
            $table->string('passport_scan')->default('no-image.png');
            $table->string('nic_scan')->default('no-image.png');
            $table->string('bill_scan')->default('no-image.png');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('citizens');
    }
}
