@extends('layouts.master')

@section('title')
  @lang('Главная') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="board board--home">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">@lang('Группа компаний<br>КОИНОТИ НАВ')</h1>

          <p class="board__text board__text--upper">@lang('Верим, можем, создаем')</p>
          <a class="btn board__btn" href="{{ route('about', ['lang' => $lang, 'category' => 'history']) }}">@lang('Подробнее')</a>
        </div>
      </div>
    </div>

    <div class="container home-page-grid">
      <x-histories-block class="home-page-grid__history" :histories="$data['histories']" />

      <section class="box home-page-grid__management">
        <h2 class="box__title">@lang('Наш менеджмент')</h2>

        <p class="box__text">@lang('В нас сочетаются инновации и традиции. Мы знак истинного качества, символ верности и преданности своему делу, своему обществу и стране.')</p>
        <a class="btn box__btn" href="{{ route('about', ['lang' => $lang, 'category' => 'management']) }}">@lang('Подробнее')</a>
      </section>

      <section class="box home-page-grid__investors">
        <h2 class="box__title">@lang('Инвесторам')</h2>

        <p class="box__text">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.')</p>
        <a class="btn box__btn" href="{{ route('partnership', ['lang' => $lang, 'category' => 'investors-and-states']) }}">@lang('Подробнее')</a>
      </section>

      <section class="box home-page-grid__contribution">
        <h2 class="box__title">@lang('Вклад в общество')</h2>

        <p class="box__text">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.')</p>
        <a class="btn box__btn" href="{{ route('contribution', $lang) }}">@lang('Подробнее')</a>
      </section>

      <article class="box modern-tjk home-page-grid__opportunity">
        <h2 class="modern-tjk__title">@lang('Страна<br>возможностей')</h2>

        <p class="modern-tjk__text">@lang('Современный Таджикистан')</p>
        <a class="play-video modern-tjk__play">@lang('Смотреть<br>видео')</a>
      </article>
    </div>

    <section class="home-news">
      <div class="container home-news__container">
        <div class="caption home-news__caption">
          <div class="caption__inner">
            <h2 class="title caption__title">@lang('Наши новости')</h2>
            <p class="caption__subtitle">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.')</p>
          </div>

          <a class="btn caption__btn" href="{{ route('about', ['lang' => $lang, 'category' => 'history']) }}">@lang('Читать все новости')</a>
        </div>

        <ul class="card-list">
          @foreach ($data['news'] as $news)
            <li class="card-list__item">
              <x-news-card :news="$news" />
            </li>
          @endforeach
        </ul>

      </div>
    </section>

    <section class="container home-projects">
      <div class="caption home-projects__caption">
        <div class="caption__inner">
          <h2 class="title caption__title">@lang('Наши проекты')</h2>
          <p class="caption__subtitle">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.')</p>
        </div>

        <a class="btn caption__btn" href="{{ route('projects', ['lang' => $lang, 'category' => 'all']) }}">@lang('Все наши проекты')</a>
      </div>

      <div class="glide projects-glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides">
            @foreach ($data['projects'] as $project)
              <li class="glide__slide project-item">
                <a class="project-item__link" href="{{ $project->url }}">
                  <img class="project-item__logo" src="{{ asset('files/img/projects/' . $project->logo) }}" width="165" height="112" alt="{{ $project->title }}">
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/home.js') }}" type="module"></script>
@endsection
