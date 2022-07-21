@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="board about-history__board">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">@lang('Группа компаний<br>КОИНОТИ НАВ')</h1>
          <p class="board__text board__text--upper">@lang('Верим, можем, создаем')</p>

          <a class="play-video about-history__play-video">@lang('Смотреть<br>видео')</a>
        </div>
      </div>
    </div>

    <div class="container about-history__container">
      <div class="about-history__left">
        <h1 class="title about-history__title">@lang('О нас')</h1>
        <p class="about-history__text">@lang('Группа компаний "КОИНОТИ НАВ" создана в 1991 году. Группа компаний объединяет ряд производственных и торговых предприятий, работающих в области поставок и реализации товаров народного потребления, лекарственных препаратов и продуктов питания, обслуживания и продажи автомобилей, повышения образованности и квалификации специалистов. На сегодня - это один из наиболее динамично развивающихся холдингов Республики Таджикистан. Главная Миссия Группы компаний "КОИНОТИ НАВ" – это общественное благополучие. Наша гордость – сотрудники. К подбору персонала относимся с огромной ответственностью. Именно поэтому холдинг состоит из: профессиональных и компетентных специалистов, высококвалифицированных менеджеров и управленцев. Мы постоянно растем и развиваемся, ставим перед собой амбициозные цели, которые умеем эффективно достигать. Выражаем благодарность всем нашим постоянным партнерам и клиентам за Ваше доверие. Мы всегда открыты к сотрудничеству.')</p>
      </div>

      <x-histories-block class="about-history__histories" :histories="$data['histories']" />
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/about/history.js') }}" type="module"></script>
@endsection
