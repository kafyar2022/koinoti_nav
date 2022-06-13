<?php

namespace Database\Seeders;

use App\Models\History;
use Illuminate\Database\Seeder;

class HistorySeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $histories = array(
      array(
        'year' => 1991,
        'en_history' => 'The origin and further formation of the KOINOTI NAV Group of Companies began in 1991, with the formation of a pharmaceutical distributor, Dusti Pharma LLC.',
        'ru_history' => 'Зарождение и дальнейшее становление Группы компаний "КОИНОТИ НАВ" началось в 1991 году, с образования фармацевтического дистрибьютора, компании ООО "Дусти Фарма".',
        'tj_history' => 'Пайдо шудан ва ташаккули минбаъдаи Гурӯҳи Ширкатҳои KOINOTI NAV дар соли 1991 бо таъсиси дистрибютори фармасевтӣ ҶДММ «Дусти Фарма» оғоз ёфт.',
      ),
      array(
        'year' => 1997,
        'en_history' => 'Thanks to hard work and the right marketing strategy, DUSTI LLC is entering the first positions in the field of supply and sale of medicines and medical equipment to the domestic market.',
        'ru_history' => 'ООО "ДУСТИ", благодаря усердной работе и правильной маркетинговой стратегии, выходит на первые позиции в области поставок и реализации лекарственных средств и медицинской техники на внутренний рынок.',
        'tj_history' => 'Бо шарофати заҳматҳои зиёд ва стратегияи дурусти маркетинг ҶДММ «ДУСТИ» дар соҳаи таъминот ва фурӯши доруворӣ ва таҷҳизоти тиббӣ ба бозори дохилӣ ба ҷойҳои аввал медарояд.',
      ),
      array(
        'year' => 2000,
        'en_history' => 'The underdeveloped and national strategic sectors of the economy are becoming priority areas of activity. ',
        'ru_history' => 'Приоритетными сферами деятельности становятся слабо развитые и национальные стратегические сектора экономики.',
        'tj_history' => 'Соҳаҳои сусттараққикарда ва миллии стратегии иқтисодиёт ба самтҳои афзалиятноки фаъолият табдил меёбанд.',
      ),
      array(
        'year' => 2007,
        'en_history' => 'The number of successfully operating and dynamically developing companies within "KOINOTI NAV" in various business areas reaches seven. More than 700 jobs have been created.',
        'ru_history' => 'Количество успешно действующих и динамично развивающихся компаний в составе "КОИНОТИ НАВ" в разных направлениях бизнеса достигает семи. Создано более 700 рабочих мест.',
        'tj_history' => 'Шумораи ширкатҳои бомуваффақият амалкунанда ва босуръат рушдкунанда дар доираи «KOINOTI NAV» дар соҳаҳои гуногуни тиҷорат ба ҳафт нафар мерасад. Зиёда аз 700 чои кор ташкил карда шуд.',
      ),
      array(
        'year' => 2012,
        'en_history' => 'Implementing strategic plans and in every possible way supporting the entry of pharmaceutical marketing companies that are part of the KOINOTI NAV Group of Companies into the world market, foreign divisions are systematically, step by step, opened in the countries of Southeast Asia and the CIS.',
        'ru_history' => 'Реализуя стратегические планы и всячески поддерживая выход фармацевтических маркетинговых компаний входящих в состав Группы компаний "КОИНОТИ НАВ" на мировой рынок, систематично, шаг за шагом открываются зарубежные подразделения в странах Юго-Восточной Азии и на территории СНГ.',
        'tj_history' => 'Татбиқи нақшаҳои стратегӣ ва ҳамаҷониба дастгирӣ намудани вуруди ширкатҳои маркетингии дорусозӣ, ки ба гурӯҳи ширкатҳои KOINOTI NAV ба бозори ҷаҳонӣ дохил мешаванд, дар кишварҳои Осиёи Ҷанубу Шарқӣ ва ИДМ мунтазам, зина ба зина шӯъбаҳои хориҷӣ кушода мешаванд.',
      ),
      array(
        'year' => 2019,
        'en_history' => 'For almost two decades of active activity, the Group of Companies has expanded, and at the beginning of 2019 it consisted of eleven organizations and companies of different forms of ownership.',
        'ru_history' => 'За почти два десятилетие активной деятельности, Группа компаний расширилась, и на начало 2019 года состояла из одиннадцати организаций и компаний разных форм собственности.',
        'tj_history' => 'Тӯли тақрибан ду даҳсолаи фаъолияти фаъол Гурӯҳи ширкатҳо тавсеа ёфт ва дар аввали соли 2019 аз ёздаҳ ташкилоту ширкатҳои дорои шаклҳои гуногуни моликият иборат буд.',
      ),
      array(
        'year' => 2020,
        'en_history' => 'Today, after many years of fruitful activity, the KOINOTI NAV Group of Companies has significantly expanded its borders and set its interests far beyond the borders of the Republic of Tajikistan, at the international level.',
        'ru_history' => 'На сегодня, после многолетней плодотворной деятельности, Группа компаний «КОИНОТИ НАВ» значительно расширила свои границы и поставила свои интересы далеко за пределы Республики Таджикистан, на международном уровне.',
        'tj_history' => 'Имрӯз, пас аз фаъолияти чандинсолаи пурсамар, Гурӯҳи Ширкатҳои KOINOTI NAV марзҳои худро ба таври назаррас васеъ намуда, манфиатҳои худро берун аз ҳудуди Ҷумҳурии Тоҷикистон, дар сатҳи байналмилалӣ гузоштааст.',
      ),
    );

    foreach ($histories as $history) {
      History::create([
        'year' => $history['year'],
        'en_history' => $history['en_history'],
        'ru_history' => $history['ru_history'],
        'tj_history' => $history['tj_history'],
      ]);
    }
  }
}
