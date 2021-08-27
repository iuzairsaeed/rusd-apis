<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('country');
            $table->bigInteger('nic')->unique();
            $table->date('expiry_date');    
            $table->bigInteger('passport_no')->unique();    
            $table->boolean('tax_payer')->default(false);    
            $table->bigInteger('tax_no')->nullable()->unique();    
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
        Schema::dropIfExists('countries');
    }
}
