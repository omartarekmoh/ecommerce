<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId("category_id")->constrained()->cascadeOnDelete();
            $table->foreignId("sub_category_id")->constrained()->cascadeOnDelete();
            // $table->foreignId("attribute_id")->constrained()->cascadeOnDelete();
            $table->json("title");
            $table->integer("price");
            $table->integer("discount");
            $table->json("description");
            $table->integer("stock");
            $table->integer('status')->default(0)->comment("0 is published 1 is inactive");

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
        Schema::dropIfExists('products');
    }
};
