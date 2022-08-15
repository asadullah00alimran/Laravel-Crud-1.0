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
            $table->increments("id");
            $table->string("pname");
            $table->string("pdes");
            $table->string("pcat");
            $table->string("subcat")->nullable();
            $table->integer("price");
            $table->integer("status")->default(0)->comment("0 for not available 1 for Available and not selected anyone then it takes 0 by default");
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
