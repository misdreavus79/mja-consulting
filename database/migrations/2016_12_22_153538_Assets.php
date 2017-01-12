<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Assets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // assets table
        Schema::create('assets', function(Blueprint $table)
        {
          $table->increments('id');
          $table->string('name')
                ->unique();
          $table->string('description');
          $table->string('url')
                ->unique();
          $table->char('type', 3);
          $table->timestamps();
        });

        Schema::table('posts', function(Blueprint $table) {
            $table->foreign('featured_asset')
                  ->references('id')->on('assets')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('assets');
    }
}
