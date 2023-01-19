<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCouponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coupons', function (Blueprint $table) {
            $table->id();

            $table->string('title', 150)->nullable();
            $table->string('coupon_code', 20)->nullable();

            $table->string('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->string('image')->nullable();
            $table->string('banner_image')->nullable();
            
            $table->date('start_date')->nullable();
            $table->date('verified_on')->nullable();
            $table->date('expire_date')->nullable();

            $table->string('redirect_site_name', 200)->nullable();
            $table->text('redirect_site_url')->nullable();

            $table->smallInteger('views')->default(0);
            $table->tinyInteger('code')->default(1);
            $table->tinyInteger('featured')->default(0);

            $table->unsignedBigInteger('store_id');
            $table->foreign('store_id')->references('id')->on('stores')->onDelete('cascade');            

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
        Schema::dropIfExists('coupons');
    }
}
