<?php

namespace Database\Seeders;

use App\Models\News;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    foreach (range(1, 20) as $key) {
      News::create([
        'lang' => 'ru',
        'title' => 'Lorem Ipsum',
        'slug' => SlugService::createSlug(News::class, 'slug', 'Lorem Ipsum'),
        'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et condimentum pharetra egestas mauris cursus consectetur. Ultrices viverra pellentesque neque sed quisque orci tortor. Aliquet tincidunt eget nisi, malesuada vitae. Quam sed nisi, interdum neque ullamcorper sagittis, sagittis. Diam viverra eros, lacinia ac. Aliquam, congue aliquam augue id sit interdum. Libero urna, ut cursus volutpat eleifend interdum. Quam condimentum pretium amet ultricies turpis sociis. Facilisi augue in morbi sollicitudin nec libero accumsan. Lectus at ultricies fermentum lacus, faucibus eleifend. Ut pharetra, scelerisque ornare erat. Ipsum non, purus dui egestas a. Leo at at ultrices ultricies consectetur risus.',
        'img' => 'news.png',
      ]);
    }
  }
}
