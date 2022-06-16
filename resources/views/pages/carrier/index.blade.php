@extends('layouts.master')

@section('title')
  @lang('Карьера') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="board carrier__board">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">@lang('Общекомандная цель')</h1>

          <p class="board__text">@lang('Создать инновационную и динамично развивающуюся команду')</p>
        </div>
      </div>
    </div>

    <section class="container success-formula">
      <h2 class="title success-formula__title">Наша формула успеха</h2>
      <p class="success-formula__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.</p>

      <ul class="card-list">
        <li class="card-list__item success-formula-item" data-before="Ф">Высокая мотивация и вдохновение</li>
        <li class="card-list__item success-formula-item" data-before="Д">Высокая мотивация и вдохновение</li>
        <li class="card-list__item success-formula-item" data-before="В">Высокая мотивация и вдохновение</li>
      </ul>
    </section>

    <section class="container principles">
      <h2 class="title principles__title">Наши принципы</h2>
      <p class="principles__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.</p>

      <ol class="principles-list">
        @foreach ($data['principles'] as $principle)
          <li class="principle-item">{{ $principle->text }}</li>
        @endforeach
      </ol>
    </section>

    <section class="container internship">
      <div class="internship__left">
        <h2 class="title internship__title">Стажировка</h2>

        <p class="internship__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant condimentum aenean mauris, lacinia pharetra consequat, pharetra. Lectus venenatis, facilisi sed augue massa odio integer viverra a. Libero ut et, egestas felis. Duis penatibus eu, dictumst viverra eu, pharetra nam id. Rhoncus praesent ac sed leo a dolor. Et, nunc vulputate tortor in. Nunc tellus blandit nam eget cras. Ac aliquet phasellus rhoncus, dolor.</p>
        <p class="internship__text">Venenatis, odio sed lectus porta vitae nec bibendum. Tincidunt enim est, enim, nulla eget gravida. At egestas amet, lorem purus non. Amet nam duis diam fermentum lorem dignissim. Ullamcorper in donec nulla dignissim pretium sed aliquam.</p>

        <a class="btn internship__btn" href="{{ route('carrier.test', $lang) }}">@lang('Пройдите тестирование')</a>
      </div>
    </section>
  </main>
@endsection
