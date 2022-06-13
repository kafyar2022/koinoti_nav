<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('news', function (Blueprint $table) {
      $table->id();
      $table->string('slug')->unique();
      $table->string('en_title');
      $table->string('ru_title');
      $table->string('tj_title');
      $table->text('en_text');
      $table->text('ru_text');
      $table->text('tj_text');
      $table->string('img');
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
    Schema::dropIfExists('news');
  }
}
