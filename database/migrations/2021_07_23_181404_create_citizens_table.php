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
            'Property',
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
            $table->foreignId('user_id');
            $table->integer('step_no')->unsigned();
            $table->string('country');
            $table->bigInteger('nic')->unique();
            $table->date('expiry_date');    
            $table->bigInteger('passport_no')->unique();    
            $table->boolean('tax_payer')->nullable()->default(false);    
            $table->bigInteger('tax_no')->nullable()->unique();    
            $table->bigInteger('net_income')->nullable();    
            $table->enum('source_of_fund', $fund )->nullable();    
            $table->enum('bank_deposit', $experience)->nullable();
            $table->enum('listed_stocks', $experience)->nullable();
            $table->enum('private_equities', $experience)->nullable();
            $table->enum('real_estate', $experience)->nullable();
            $table->string('passport_scan')->nullable()->default('no-image.png');
            $table->string('nic_scan')->nullable()->default('no-image.png');
            $table->string('bill_scan')->nullable()->default('no-image.png');
            $table->timestamps();
            $table->softDeletes();
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
