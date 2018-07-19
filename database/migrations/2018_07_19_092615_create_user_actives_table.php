<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserActivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_actives', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('type')->comment('类型 pub_post reply_post');
            $table->integer('relation_id');
            $table->integer('relation_type');
            $table->string('unique_id')->nullable()->index();
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
        Schema::dropIfExists('user_actives');
    }
}
