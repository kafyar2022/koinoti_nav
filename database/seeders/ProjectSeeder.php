<?php

namespace Database\Seeders;

use App\Models\Project;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $projects = [
      [
        'lang' => 'ru',
        'title' => 'Хонаи ман',
        'slug' => 'honai-man',
        'url' => '#',
        'logo' => 'honai-man.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Дусти фарма',
        'slug' => 'dusti-pharma',
        'url' => '#',
        'logo' => 'dusti-pharma.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Ёвар',
        'slug' => 'evar',
        'url' => '#',
        'logo' => 'evar.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Хонаи ман',
        'slug' => 'honai-man-2',
        'url' => '#',
        'logo' => 'honai-man.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Дусти фарма',
        'slug' => 'dusti-pharma-2',
        'url' => '#',
        'logo' => 'dusti-pharma.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Ёвар',
        'slug' => 'evar-2',
        'url' => '#',
        'logo' => 'evar.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Хонаи ман',
        'slug' => 'honai-man-3',
        'url' => '#',
        'logo' => 'honai-man.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Дусти фарма',
        'slug' => 'dusti-pharma-3',
        'url' => '#',
        'logo' => 'dusti-pharma.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Ёвар',
        'slug' => 'evar-3',
        'url' => '#',
        'logo' => 'evar.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Хонаи ман',
        'slug' => 'honai-man-4',
        'url' => '#',
        'logo' => 'honai-man.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Дусти фарма',
        'slug' => 'dusti-pharma-4',
        'url' => '#',
        'logo' => 'dusti-pharma.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Ёвар',
        'slug' => 'evar-4',
        'url' => '#',
        'logo' => 'evar.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Хонаи ман',
        'slug' => 'honai-man-5',
        'url' => '#',
        'logo' => 'honai-man.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Дусти фарма',
        'slug' => 'dusti-pharma-5',
        'url' => '#',
        'logo' => 'dusti-pharma.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Ёвар',
        'slug' => 'evar-5',
        'url' => '#',
        'logo' => 'evar.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Хонаи ман',
        'slug' => 'honai-man-6',
        'url' => '#',
        'logo' => 'honai-man.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Дусти фарма',
        'slug' => 'dusti-pharma-6',
        'url' => '#',
        'logo' => 'dusti-pharma.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Ёвар',
        'slug' => 'evar-6',
        'url' => '#',
        'logo' => 'evar.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Хонаи ман',
        'slug' => 'honai-man-7',
        'url' => '#',
        'logo' => 'honai-man.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Дусти фарма',
        'slug' => 'dusti-pharma-7',
        'url' => '#',
        'logo' => 'dusti-pharma.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Ёвар',
        'slug' => 'evar-7',
        'url' => '#',
        'logo' => 'evar.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Хонаи ман',
        'slug' => 'honai-man-8',
        'url' => '#',
        'logo' => 'honai-man.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Дусти фарма',
        'slug' => 'dusti-pharma-8',
        'url' => '#',
        'logo' => 'dusti-pharma.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Ёвар',
        'slug' => 'evar-8',
        'url' => '#',
        'logo' => 'evar.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Хонаи ман',
        'slug' => 'honai-man-9',
        'url' => '#',
        'logo' => 'honai-man.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Дусти фарма',
        'slug' => 'dusti-pharma-9',
        'url' => '#',
        'logo' => 'dusti-pharma.png',
      ],
      [
        'lang' => 'ru',
        'title' => 'Ёвар',
        'slug' => 'evar-9',
        'url' => '#',
        'logo' => 'evar.png',
      ],
    ];

    foreach (range(1, 9) as $key) {
      foreach ($projects as $project) {
        Project::create([
          'lang' => $project['lang'],
          'title' => $project['title'],
          'slug' => $project['slug'],
          'url' => $project['url'],
          'logo' => $project['logo'],
        ]);
      }
    }
  }
}
