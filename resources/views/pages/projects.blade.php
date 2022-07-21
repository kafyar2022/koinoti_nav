@extends('layouts.master')

@section('title')
  @lang('Проекты') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="board projects__board">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">@lang('Наши проекты')</h1>
          <p class="board__text">@lang('Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.')</p>
        </div>
      </div>
    </div>

    <section class="container projects" id="projects">
      <h2 class="title projects__title">@lang('Lorem Ipsum')</h2>
      <p class="projects__subtitle">@lang('Создание новых рабочих мест, реализация инфраструктурных проектов, прямые инвестиции, то, что мы делаем с самого первого дня основания Группы компаний "КОИНОТИ НАВ". Мы объединяем представителей политической, культурной, интеллектуальной и деловой элиты; усиливаем партнерство и сотрудничество успешных людей, нацеленное на совершенствование бизнес-среды и установлению деловых и общественных связей.')</p>

      <ul class="card-list projects-list">
        @foreach ($data['projects'] as $project)
          <li class="card-list__item">
            <x-project-card :project="$project" />
          </li>
        @endforeach
      </ul>

      <div class="projects-pagination">
        {{ $data['projects']->fragment('projects')->links('components.pagination') }}
      </div>
    </section>
  </main>
@endsection
