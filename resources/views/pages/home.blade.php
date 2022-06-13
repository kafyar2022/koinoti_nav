@extends('layouts.master')

@section('title')
  {{ __('Main | Koinoti Nav') }}
@endsection

@section('content')
  <main class="main-content">
    <div class="board board--home">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">{{ $data['texts']['home-board-title'] }}</h1>

          <p class="board__text board__text--upper">{{ $data['texts']['home-board-text'] }}</p>
          <a class="btn board__btn" href="{{ route('about', ['locale' => app()->getLocale(), 'category' => 'history']) }}">{{ __('More') }}</a>
        </div>
      </div>
    </div>

    <div class="container home-page-grid">
      <x-histories-block class="home-page-grid__history" :histories="$data['histories']" />

      <section class="box home-page-grid__management">
        <h2 class="box__title">{{ __('Our management') }}</h2>

        <p class="box__text">{{ $data['texts']['home-management-text'] }}</p>
        <a class="btn box__btn" href="{{ route('about', ['locale' => app()->getLocale(), 'category' => 'management']) }}">{{ __('More') }}</a>
      </section>

      <section class="box home-page-grid__investors">
        <h2 class="box__title">{{ __('Investors') }}</h2>

        <p class="box__text">{{ $data['texts']['home-investors-text'] }}</p>
        <a class="btn box__btn" href="{{ route('partnership', ['locale' => app()->getLocale(), 'category' => 'investors-and-states']) }}">{{ __('More') }}</a>
      </section>

      <section class="box home-page-grid__contribution">
        <h2 class="box__title">{{ __('Contribution to society') }}</h2>

        <p class="box__text">{{ $data['texts']['home-contribution-text'] }}</p>
        <a class="btn box__btn" href="{{ route('contribution', ['locale' => app()->getLocale()]) }}">{{ __('More') }}</a>
      </section>

      <article class="box modern-tjk home-page-grid__opportunity">
        <h2 class="modern-tjk__title">{{ $data['texts']['modern-tjk-title'] }}</h2>

        <p class="modern-tjk__text">{{ $data['texts']['modern-tjk-text'] }}</p>
        <a class="play-video modern-tjk__play">{!! __('Watch <br> video') !!}</a>
      </article>
    </div>

    <section class="home-news">
      <div class="container home-news__container">
        <div class="caption home-news__caption">
          <div class="caption__inner">
            <h2 class="title caption__title">{{ $data['texts']['home-news-title'] }}</h2>
            <p class="caption__subtitle">{{ $data['texts']['home-news-subtitle'] }}</p>
          </div>

          <a class="btn caption__btn" href="{{ route('about', ['locale' => app()->getLocale(), 'category' => 'history']) }}">{{ __('Read all news') }}</a>
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
          <h2 class="title caption__title">{{ $data['texts']['home-projects-title'] }}</h2>
          <p class="caption__subtitle">{{ $data['texts']['home-projects-subtitle'] }}</p>
        </div>

        <a class="btn caption__btn" href="{{ route('projects', ['locale' => app()->getLocale(), 'category' => 'all']) }}">{{ __('All projects') }}</a>
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
