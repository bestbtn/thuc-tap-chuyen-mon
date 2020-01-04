<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterConlumnProPayProNumberInTableProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->integer('pro__number_pay')->default(0)->comment('số lần sản phẩm bán được');
            $table->integer('pro_number')->default(0)->comment('số lượng sản phẩm');
            $table->integer('pro_total_rating')->default(0)->comment('tổng số đánh số');
            $table->integer('pro_total_number_rating')->default(0)->comment('tổng số điểm đánh giá');
        });
    }


    public function down()
    {
        Schema::table('table_products', function (Blueprint $table) {
            $table->dropColumn('pro_pay');
            $table->dropColumn('pro_number');
            $table->dropColumn('pro_total_rating');
            $table->dropColumn('pro_total_number_rating');
        });
    }
}
