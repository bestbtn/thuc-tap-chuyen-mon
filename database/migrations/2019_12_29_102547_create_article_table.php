<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('a_name')->nullable()->unique();
            $table->string('a_slug')->index();
            $table->string('a_description')->nullable();
            $table->string('a_content')->nullable();
            $table->string('a_active')->index()->default(1);
            $table->string('a_author_id')->index()->default(0);
            $table->string('a_description_seo')->nullable();
            $table->string('a_title_Seo')->nullable();
            $table->string('a_avatar')->nullable();
            $table->string('a_view')->default(0);
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
        Schema::dropIfExists('article');
    }
}
