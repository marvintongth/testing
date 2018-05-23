<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prod_list', function (Blueprint $table) {
            $table->increments('id');
            $table->string('brand');
            $table->string('prod_name');
            $table->string('img_path');
            $table->double('sell_price');
            $table->double('retail_price');
            //$table->timestamp('created_at')->useCurrent();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));         
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prod_list');
    }
}
