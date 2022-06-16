@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <img class="new__img" src="{{ asset('files/news/img/' . $data['new']->img) }}" alt="{{ $data['new'] }}" width="100%" height="540">

    <div class="container">
      <time class="new__date" datetime="{{ $data['new']->created_at }}">{{ date_format($data['new']->created_at, 'Y.m.d') }}</time>
      <h1 class="title new__title">{{ $data['new']->title }}</h1>
      <p class="new__subtitle">{{ $data['new']->text }}</p>

      <ul class="gallery news__gallery">
        @foreach (range(1, 6) as $key)
          <li class="gallery-item">
            <img class="gallery__img" src="{{ asset('files/news/img/news.png') }}" width="100%" height="100%" alt="Какая та фотка">
          </li>
        @endforeach
      </ul>

      <section class="news">
        <h2 class="title news__title">@lang('Lorem Ipsum')</h2>
        <p class="news__subtitle">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.')</p>

        <ul class="card-list news-list">
          @foreach ($data['news'] as $news)
            <li class="card-list__item">
              <x-news-card :news="$news" />
            </li>
          @endforeach
        </ul>
      </section>
    </div>
  </main>
@endsection
