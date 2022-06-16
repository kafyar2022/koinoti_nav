@extends('layouts.master')

@section('title')
  @lang('Партнерство') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="board partnership-is__board">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">@lang('Страна<br>возможностей')</h1>
          <p class="board__text">@lang('Современный Таджикистан')</p>

          <a class="play-video partnership-is__play-video">@lang('Смотреть<br>видео')</a>
        </div>
      </div>
    </div>

    <div class="container">
      <h2 class="title partnership__title">@lang('О Таджикистане')</h2>
      <p class="partnership__text">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit.')</p>

      <ul class="card-list ipo-list">
        <li class="card-list__card ipo-card">
          <div class="ipo__inner">
            <h3 class="ipo__title">Инвесторам</h3>
            <p class="ipo__phone">+992 (44) 000 000</p>
            <p class="ipo__email">invest@koinotinav.tj</p>
          </div>
        </li>
        <li class="card-list__card ipo-card">
          <div class="ipo__inner">
            <h3 class="ipo__title">Партнерство</h3>
            <p class="ipo__phone">+992 (44) 000 000</p>
            <p class="ipo__email">parnter@koinotinav.tj</p>
          </div>
        </li>
        <li class="card-list__card ipo-card">
          <div class="ipo__inner">
            <h3 class="ipo__title">Общие вопросы</h3>
            <p class="ipo__phone">+992 (44) 000 000</p>
            <p class="ipo__email">invest@koinotinav.tj</p>
          </div>
        </li>
      </ul>

      <h2 class="title partnership__contact-title">Связь с нами</h2>
      <p class="partnership__contact-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.</p>

      <a class="btn partnership-is__btn" href="{{ route('projects', $lang) }}">@lang('Наши проекты')</a>
    </div>
  </main>
@endsection
