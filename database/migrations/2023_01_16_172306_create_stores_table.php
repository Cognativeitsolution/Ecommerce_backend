<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('uuid', 25)->nullable();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('image')->nullable();
            $table->string('banner_image')->nullable();

            $table->tinyInteger('type')->default(1); // type 1 is store and 2 is category

            $table->tinyInteger('top')->default(0); // for top stores
            $table->tinyInteger('popular')->default(0); // for popular category ?? stores
            
            $table->tinyInteger('status')->default(1);
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
        Schema::dropIfExists('stores');
    }
}
