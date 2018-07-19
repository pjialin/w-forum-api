<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->default(0);
            $table->integer('user_id')->default(0);
            $table->integer('parent_id')->default(0)->comment('父 ID');
            $table->integer('grand_parent_id')->default(0)->comment('源 ID');

            $table->integer('love_number')->default(0);
            $table->text('content')->nullable();
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
        Schema::dropIfExists('comments');
    }
}
