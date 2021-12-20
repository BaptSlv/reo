<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('label', 300);
            $table->string('image')->default('images/default.svg');
            $table->text('address_1');
            $table->text('address_2')->nullable();
            $table->integer('zipcode');
            $table->string('city', 300);
            $table->string('country', 300);
            $table->decimal('area', 12, 1);
            $table->string('measurement_unit', 50)->default('m2');
            $table->decimal('purchase_price', 12, 1)->default(0);
            $table->decimal('total_price', 12, 1)->default(0);
            $table->string('currency', 50)->default('€');
            $table->string('status')->default('available');
            $table->decimal('selling_price', 12, 1)->nullable();
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
