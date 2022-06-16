@extends('layouts.master')

@section('title')
  @lang('Карьера') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="board carrier-test__board">
      <div class="container">
        <div class="board__inner board__inner--narrow">
          <h1 class="board__title">@lang('Lorem Ipsum')</h1>

          <p class="board__text">@lang('Lorem ipsum dolor sit amet,<br>consectetur adipiscing elit.')</p>
        </div>
      </div>
    </div>

    <section class="container carrier-stages">
      <h2 class="title carrier-stages__title">Карьерные этапы</h2>
      <p class="carrier-stages__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.</p>

      <ul class="stage-list">
        <li class="stage-item">Стажировка и<br>адаптация</li>
        <li class="stage-item">Менеджер</li>
        <li class="stage-item">Ведущий<br>менеджер</li>
        <li class="stage-item">Управляющий<br>менеджер</li>
      </ul>

      <img class="carrier-stages__img" src="{{ asset('files/img/carrier-stage.jpg') }}" width="100%" height="540">

      <ul class="gallery carrier-stages__gallery">
        @foreach (range(1, 6) as $key)
          <li class="gallery-item">
            <img class="gallery__img" src="{{ asset('files/news/img/news.png') }}" width="100%" height="100%" alt="Какая та фотка">
          </li>
        @endforeach
      </ul>
    </section>

    <section class="container carrier-test">
      <h2 class="title carrier-test__title">Lorem Ipsum</h2>
      <p class="carrier-test__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.</p>

      <form class="test-form">
        <h3 class="title test-form__title">Пройди тест и стань<br>частью нашей команды</h3>

        <p class="test-form__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed</p>
        <p class="test-form__stage">Этап 1 из 10</p>
        <p class="test-form__stage test-form__stage--light">Финансовый блок</p>

        <div class="test-form__item">
          <p class="test-form__question">Финансовый анализ является элементом анализа:</p>
          <input class="visually-hidden test-form__variant" type="radio" name="quest1" id="quest1">
          <label class="test-form__label" for="quest1">инвестиционного</label>
          <input class="visually-hidden test-form__variant" type="radio" name="quest1" id="quest2">
          <label class="test-form__label" for="quest2">управленческого</label>
          <input class="visually-hidden test-form__variant" type="radio" name="quest1" id="quest3">
          <label class="test-form__label" for="quest3">финансового состояния</label>
          <input class="visually-hidden test-form__variant" type="radio" name="quest1" id="quest4">
          <label class="test-form__label" for="quest4">экономического</label>
        </div>
        <button class="btn test-form__btn" type="button">@lang('Далее')</button>

        <div class="test-form__grid">
          <input class="test-form__input" type="text" placeholder="Ваше имя и фамилия">
          <input class="test-form__input" type="tel" placeholder="Контактный номер">
          <input class="test-form__input" type="email" placeholder="Ваша электронная почта">
          <input class="test-form__input" type="text" placeholder="Загрузить резюме" readonly>
          <textarea class="test-form__input test-form__input--text" cols="30" rows="10" placeholder="Опишите, почемы вы хотите работать с нами"></textarea>
        </div>

        <div class="test-form__btn-wrap">
          <input class="visually-hidden feedback-form__privacy-policy" id="privacy-policy" type="checkbox" name="privacy_policy">
          <label class="feedback-form__label" for="privacy-policy">
            <p>@lang('Я принимаю<br>пользовательское соглашение')</p>
          </label>
          <button class="btn test-form__submit" type="submit">@lang('Отправить')</button>
        </div>
      </form>
    </section>
  </main>
@endsection

@section('script')
  <script src="{{ asset('js/pages/carrier-test.js') }}" type="module"></script>
@endsection
