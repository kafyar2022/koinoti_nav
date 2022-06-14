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
        <p class="about-history__text">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. ')</p>
      </div>

      <x-histories-block class="about-history__histories" :histories="$data['histories']" />
    </div>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/about/history.js') }}" type="module"></script>
@endsection
