@extends('layouts.master')

@section('title')
  {{ __('About us') }} | {{ __('Koinoti Nav') }}
@endsection

@section('content')
  <main class="main-content">
    <div class="board about-mvv__board">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">{{ $data['texts']['about-mvv-board-title'] }}</h1>
          <p class="board__text">{{ $data['texts']['about-mvv-board-text'] }}</p>

          <a class="play-video about-mvv__play-video">{!! __('Watch <br> video') !!}</a>
        </div>
      </div>
    </div>

    <section class="about-vision">
      <div class="container about-vision__container">
        <h2 class="title about-vision__title">{{ $data['texts']['about-vision-title'] }}</h2>
        <p class="about-vision__subtitle">{{ $data['texts']['about-vision-subtitle'] }}</p>
      </div>

      <div class="board about-vision__board">
        <div class="container">
          <div class="board__inner">
            <h1 class="board__title">{{ $data['texts']['about-vision-board-title'] }}</h1>
            <p class="board__text">{{ $data['texts']['about-vision-board-text'] }}</p>

            <a class="play-video">{!! __('Watch <br> video') !!}</a>
          </div>
        </div>
      </div>
    </section>

    <section class="about-values">
      <div class="container about-values__container">
        <h2 class="title about-values__title">{{ $data['texts']['about-values-title'] }}</h2>
        <p class="about-values__subtitle">{{ $data['texts']['about-values-subtitle'] }}</p>
      </div>

      <div class="board about-values__board">
        <div class="container">
          <div class="board__inner">
            <h1 class="board__title">{{ $data['texts']['about-values-board-title'] }}</h1>
            <p class="board__text">{{ $data['texts']['about-values-board-text'] }}</p>

            <a class="play-video">{!! __('Watch <br> video') !!}</a>
          </div>
        </div>
      </div>
    </section>

    <section class="our-values">
      <div class="container our-values__container">
        <h2 class="title about-values__title">{{ $data['texts']['our-values-title'] }}</h2>
        <p class="about-values__subtitle">{{ $data['texts']['our-values-subtitle'] }}</p>
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
