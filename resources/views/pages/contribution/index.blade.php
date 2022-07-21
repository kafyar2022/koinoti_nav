@extends('layouts.master')

@section('title')
  @lang('Вклад в общество') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="board contribution__board">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">@lang('Вклад в общество')</h1>

          <p class="board__text">@lang('Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.')</p>
        </div>
      </div>
    </div>

    <section class="container contributions">
      <h2 class="title contributions__title">Lorem Ipsum</h2>
      <p class="contributions__subtitle">@lang('Группа компаний "КОИНОТИ НАВ" - социально-ответственный холдинг, который поддерживает национальные цели развития страны. "КОИНОТИ НАВ" постоянно стремится оказывать положительное влияние на качество жизни, как общества в целом, так и отдельных социальных групп, не ограничиваясь разовыми мероприятиями. Мы помогаем не только людям, оказавшимся в сложной жизненной ситуации, но и тем, кто ищет поддержки в своих благих начинаний. В Группе компаний "КОИНОТИ НАВ" работают инициативные и ответственные люди, компетентные организаторы, всегда доводящие замысел до логического результата. ')</p>

      <ul class="card-list contribution-list">
        @foreach (range(1, 9) as $key)
          <li class="card-list__item box contribution-card">
            <h3 class="box__title">Lorem Ipsum</h3>

            <p class="box__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.</p>
            <a class="btn box__btn" href="{{ route('contribution.show', ['lang' => $lang, 'slug' => 'slug']) }}">@lang('Подробнее')</a>
          </li>
        @endforeach
      </ul>
    </section>
  </main>
@endsection
