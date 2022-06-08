<?php

namespace Database\Seeders;

use App\Models\Text;
use Illuminate\Database\Seeder;

class TextSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $texts = array(
      array(
        'caption' => 'email',
        'page' => 'all',
        'en_text' => 'info@koinotinav.tj',
        'ru_text' => 'info@koinotinav.tj',
        'tj_text' => 'info@koinotinav.tj',
      ),
      array(
        'caption' => 'phone',
        'page' => 'all',
        'en_text' => '+992 918 55 64 64',
        'ru_text' => '+992 918 55 64 64',
        'tj_text' => '+992 918 55 64 64',
      ),
    );

    foreach ($texts as $text) {
      Text::create([
        'caption' => $text['caption'],
        'page' => $text['page'],
        'en_text' => $text['en_text'],
        'ru_text' => $text['ru_text'],
        'tj_text' => $text['tj_text'],
      ]);
    }
  }
}
