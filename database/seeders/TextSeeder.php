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
      array(
        'caption' => 'copyright',
        'page' => 'all',
        'en_text' => '© 2020 Koinoti Nav
All rights reserved',
        'ru_text' => '© 2020 Коиноти нав
Все права защищены',
        'tj_text' => '© 2020 Коиноти нав
Ҳамаи ҳуқуқ маҳфуз аст',
      ),
      array(
        'caption' => 'home-board-title',
        'page' => 'home',
        'en_text' => 'Group company
KOINOTI NAV',
        'ru_text' => 'Группа компаний
КОИНОТИ НАВ',
        'tj_text' => 'Гурухи фирмахои
КОИНОТИ НАВ',
      ),
      array(
        'caption' => 'home-board-text',
        'page' => 'home',
        'en_text' => 'We believe, we can, we create',
        'ru_text' => 'Верим, можем, создаем',
        'tj_text' => 'Боварӣ дорем, метавонем, эҷод мекунем',
      ),
      array(
        'caption' => 'home-management-text',
        'page' => 'home',
        'en_text' => 'We combine innovation and tradition.
We are a sign of true quality, a symbol of loyalty
and dedication to their cause, their society and country.',
        'ru_text' => 'В нас сочетаются инновации и традиции.
Мы знак истинного качества, символ верности
и преданности своему делу, своему обществу и стране.',
        'tj_text' => 'Мо навоварӣ ва анъанаро муттаҳид мекунем.
Мо нишонаи сифатн хакикй, рамзи вафодорй мебошем
ва садоқат ба кори худ, ҷомеа ва кишвари худ.',
      ),
      array(
        'caption' => 'home-investors-text',
        'page' => 'home',
        'en_text' => 'Lorem ipsum dolor sit amet,
consectetur adipiscing elit. Ornare
vitae sed aliquam sed ullamcorper.',
        'ru_text' => 'Lorem ipsum dolor sit amet,
consectetur adipiscing elit. Ornare
vitae sed aliquam sed ullamcorper.',
        'tj_text' => 'Lorem ipsum dolor sit amet,
consectetur adipiscing elit. Ornare
vitae sed aliquam sed ullamcorper.',
      ),
      array(
        'caption' => 'home-contribution-text',
        'page' => 'home',
        'en_text' => 'Lorem ipsum dolor sit amet,
consectetur adipiscing elit. Ornare
vitae sed aliquam sed ullamcorper.',
        'ru_text' => 'Lorem ipsum dolor sit amet,
consectetur adipiscing elit. Ornare
vitae sed aliquam sed ullamcorper.',
        'tj_text' => 'Lorem ipsum dolor sit amet,
consectetur adipiscing elit. Ornare
vitae sed aliquam sed ullamcorper.',
      ),
      array(
        'caption' => 'modern-tjk-title',
        'page' => 'home',
        'en_text' => 'Country
opportunities',
        'ru_text' => 'Страна
возможностей',
        'tj_text' => 'Кишвари
имкониятхо',
      ),
      array(
        'caption' => 'modern-tjk-text',
        'page' => 'home',
        'en_text' => 'Modern Tajikistan',
        'ru_text' => 'Современный Таджикистан',
        'tj_text' => 'Тоҷикистони муосир',
      ),
      array(
        'caption' => 'home-news-title',
        'page' => 'home',
        'en_text' => 'Our news',
        'ru_text' => 'Наши новости',
        'tj_text' => 'Хабархои мо',
      ),
      array(
        'caption' => 'home-news-subtitle',
        'page' => 'home',
        'en_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.',
        'ru_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.',
        'tj_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.',
      ),
      array(
        'caption' => 'home-projects-title',
        'page' => 'home',
        'en_text' => 'Our projects',
        'ru_text' => 'Наши проекты',
        'tj_text' => 'Лоиҳаҳои мо',
      ),
      array(
        'caption' => 'home-projects-subtitle',
        'page' => 'home',
        'en_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.',
        'ru_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.',
        'tj_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.',
      ),
      array(
        'caption' => 'about-history-board-title',
        'page' => 'about.history',
        'en_text' => 'Group company
KOINOTI NAV',
        'ru_text' => 'Группа компаний
КОИНОТИ НАВ',
        'tj_text' => 'Гурухи фирмахои
КОИНОТИ НАВ',
      ),
      array(
        'caption' => 'about-history-board-text',
        'page' => 'about.history',
        'en_text' => 'We believe, we can, we create',
        'ru_text' => 'Верим, можем, создаем',
        'tj_text' => 'Боварӣ дорем, метавонем, эҷод мекунем',
      ),
      array(
        'caption' => 'about-history-title',
        'page' => 'about.history',
        'en_text' => 'About us',
        'ru_text' => 'О нас',
        'tj_text' => 'Дар бораи мо',
      ),
      array(
        'caption' => 'about-history-text',
        'page' => 'about.history',
        'en_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'ru_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
        'tj_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
      ),
      array(
        'caption' => 'about-mvv-board-title',
        'page' => 'about.mission-vision',
        'en_text' => 'Our mission',
        'ru_text' => 'Наша миссия',
        'tj_text' => 'Вазифаи мо',
      ),
      array(
        'caption' => 'about-mvv-board-text',
        'page' => 'about.mission-vision',
        'en_text' => 'Contribute to the public welfare',
        'ru_text' => 'Способствовать общественному благополучию',
        'tj_text' => 'Ба некуахволии чамъият хисса гузоштан',
      ),
      array(
        'caption' => 'about-vision-title',
        'page' => 'about.mission-vision',
        'en_text' => 'Lorem Ipsum',
        'ru_text' => 'Lorem Ipsum',
        'tj_text' => 'Lorem Ipsum',
      ),
      array(
        'caption' => 'about-vision-subtitle',
        'page' => 'about.mission-vision',
        'en_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
        'ru_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
        'tj_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
      ),
      array(
        'caption' => 'about-vision-board-title',
        'page' => 'about.mission-vision',
        'en_text' => 'Our vision',
        'ru_text' => 'Наше видение',
        'tj_text' => 'Нигоҳи мо',
      ),
      array(
        'caption' => 'about-vision-board-text',
        'page' => 'about.mission-vision',
        'en_text' => 'Developing innovatively and dynamically take a leading position in the fields of activity',
        'ru_text' => 'Развиваясь инновационно и динамично занять лидирующее положение в сферах деятельности',
        'tj_text' => 'Инноватсионӣ ва динамикӣ инкишоф меёбад дар сохахои фаъолият мавкеи пешкадамро ишгол намоянд',
      ),
      array(
        'caption' => 'about-values-title',
        'page' => 'about.mission-vision',
        'en_text' => 'Lorem Ipsum',
        'ru_text' => 'Lorem Ipsum',
        'tj_text' => 'Lorem Ipsum',
      ),
      array(
        'caption' => 'about-values-subtitle',
        'page' => 'about.mission-vision',
        'en_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
        'ru_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
        'tj_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
      ),
      array(
        'caption' => 'about-values-board-title',
        'page' => 'about.mission-vision',
        'en_text' => 'Our values',
        'ru_text' => 'Наши ценности',
        'tj_text' => 'Арзишҳои мо',
      ),
      array(
        'caption' => 'about-values-board-text',
        'page' => 'about.mission-vision',
        'en_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
        'ru_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
        'tj_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
      ),
      array(
        'caption' => 'our-values-title',
        'page' => 'about.mission-vision',
        'en_text' => 'Lorem Ipsum',
        'ru_text' => 'Lorem Ipsum',
        'tj_text' => 'Lorem Ipsum',
      ),
      array(
        'caption' => 'our-values-subtitle',
        'page' => 'about.mission-vision',
        'en_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
        'ru_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
        'tj_text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.',
      ),
      array(
        'caption' => 'caption',
        'page' => 'page',
        'en_text' => 'text',
        'ru_text' => 'text',
        'tj_text' => 'text',
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
