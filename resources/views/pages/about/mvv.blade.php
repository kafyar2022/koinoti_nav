@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="board about-mvv__board">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">@lang('Наша миссия')</h1>
          <p class="board__text">@lang('Способствовать общественному благополучию')</p>

          <a class="play-video about-mvv__play-video">@lang('Смотреть<br>видео')</a>
        </div>
      </div>
    </div>

    <section class="about-vision">
      <div class="container about-vision__container">
        <h2 class="title about-vision__title">@lang('Lorem Ipsum')</h2>
        <p class="about-vision__subtitle">@lang('Всячески и всесторонне способствовать общественному благополучию через устойчивое развитие компаний ""КОИНОТИ НАВ" и социальную ответственность, ориентируясь на умножение долгосрочных социальных и экономических благ.')</p>
      </div>

      <div class="board about-vision__board">
        <div class="container">
          <div class="board__inner">
            <h1 class="board__title">@lang('Наше видение')</h1>
            <p class="board__text">@lang('Развиваясь инновационно и динамично занять лидирующее положение в сферах деятельности')</p>

            <a class="play-video">@lang('Смотреть<br>видео')</a>
          </div>
        </div>
      </div>
    </section>

    <section class="about-values">
      <div class="container about-values__container">
        <h2 class="title about-values__title">@lang('Lorem Ipsum')</h2>
        <p class="about-values__subtitle">@lang('Развиваться инновационно и динамично: быть в поиске, использовать новые способы и инструменты для повышения эффективности и продуктивности, быть всегда конкурентоспособным, развивать текущие и охватывать новые сферы деятельности, позиционировать себя на международном рынке в долгосрочном плане. Быть гибкими в условиях изменчивости внешней и внутренней среды, предвидеть грядущие изменения и быть подготовленными.')</p>
      </div>

      <div class="board about-values__board">
        <div class="container">
          <div class="board__inner">
            <h1 class="board__title">@lang('Наши ценности')</h1>
            <p class="board__text">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.')</p>

            <a class="play-video">@lang('Смотреть<br>видео')</a>
          </div>
        </div>
      </div>
    </section>

    <section class="our-values">
      <div class="container our-values__container">
        <h2 class="title about-values__title">@lang('Lorem Ipsum')</h2>
        <p class="about-values__subtitle">@lang(' Группы Компаний "КОИНОТИ НАВ" – это система исповедуемых организацией внутренних духовных основ и традиций, деловых и нравственных принципов, которые отражают индивидуальность и создают фундамент для эффективной реализации стратегии.')</p>
      </div>

      <ul class="container values-list our-values__values-list">
        @foreach ($data['values'] as $value)
          <li class="value-item">
            <h3 class="value-item__title">{{ $value->title }}</h3>
            <p class="value-item__text">{{ $value->text }}</p>
          </li>
        @endforeach
      </ul>
    </section>
  </main>
@endsection
