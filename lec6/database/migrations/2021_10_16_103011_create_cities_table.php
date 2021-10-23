<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cities', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("country_id")->nullable();
            $table->string("name")->nullable();
            $table->string("slug")->nullable();
            $table->string("intro")->nullable();
            $table->string("thumb")->nullable();
            $table->longText("description")->nullable();
            $table->string("banner")->nullable();
            $table->string("language")->nullable();
            $table->string("currency")->nullable();
            $table->double("lat")->nullable();
            $table->double("lng")->nullable();

            $table->integer("priority")->nullable();
            $table->integer("status")->nullable();


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
        Schema::dropIfExists('cities');
    }
}
