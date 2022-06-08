<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('texts', function (Blueprint $table) {
      $table->id();
      $table->string('caption')->unique();
      $table->string('page');
      $table->text('en_text');
      $table->text('ru_text');
      $table->text('tj_text');
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
    Schema::dropIfExists('texts');
  }
}
