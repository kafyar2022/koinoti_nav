@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="board about-news__board">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">@lang('Новости')</h1>
          <p class="board__text">@lang('Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.')</p>
        </div>
      </div>
    </div>

    <section class="container" id="news">
      <h2 class="title about-news__title">@lang('Lorem Ipsum')</h2>
      <p class="about-news__subtitle">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.')</p>

      <ul class="card-list news-list">
        @foreach ($data['news'] as $news)
          <li class="card-list__item">
            <x-news-card :news="$news" />
          </li>
        @endforeach
      </ul>

      <div class="news-pagination">
        {{ $data['news']->fragment('news')->links('components/pagination') }}
      </div>
    </section>
  </main>
@endsection
