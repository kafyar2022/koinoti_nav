<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $socials = array(
      array(
        'en_title' => 'Facebook',
        'ru_title' => 'Фейсбук',
        'tj_title' => 'Фейсбук',
        'icon' => 'facebook.svg',
        'url' => '#',
      ),
      array(
        'en_title' => 'Instagram',
        'ru_title' => 'Инстаграм',
        'tj_title' => 'Инстаграм',
        'icon' => 'instagram.svg',
        'url' => null,
      ),
      array(
        'en_title' => 'Linked in',
        'ru_title' => 'Линкед ин',
        'tj_title' => 'Линкед ин',
        'icon' => 'linkedin.svg',
        'url' => null,
      ),
    );

    foreach ($socials as $social) {
      Social::create([
        'en_title' => $social['en_title'],
        'ru_title' => $social['ru_title'],
        'tj_title' => $social['tj_title'],
        'icon' => $social['icon'],
        'url' => $social['url'],
      ]);
    }
  }
}
