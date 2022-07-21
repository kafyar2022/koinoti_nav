@extends('layouts.master')

@section('title')
  @lang('О нас') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="board about-management__board">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">@lang('Наша<br>команда')</h1>
          <p class="board__text">@lang('Верим, можем, создаем')</p>
        </div>
      </div>
    </div>

    <section class="container employees">
      <h2 class="title about-management__title">@lang('Наш менеджмент')</h2>
      <p class="about-management__subtitle">@lang('ТОП Менеджмент Группы компаний "КОИНОТИ НАВ" осмысленными решениями и эффективными действиями, достигает операционные цели и реализует стратегические задачи, демонстрирует верность Миссии Группы компании, объединяя более 300 высококлассных специалистов и профессионалов из разных областей и направлений.')</p>

      <ul class="card-list employee-list">
        @foreach (range(1, 9) as $key)
          <li class="card-list__item">
            <x-employee-card />
          </li>
        @endforeach
      </ul>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/about/management.js') }}" type="module"></script>
@endsection
