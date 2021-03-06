<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->string('file');
            $table->string('type');
            $table->integer('fk_user_id');
            $table->string("name");
            $table->string("slug");
            $table->longText("content");
            $table->timestamps();
        });
    
        Schema::table('users', function (Blueprint $table) {
            $table->integer('is_admin');
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('files');
    }
}
