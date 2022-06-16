@extends('layouts.master')

@section('title')
  @lang('Вклад в общество') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content container">
    <time class="contribution__time">14.04.2022</time>

    <h1 class="title contribution__title">Lorem Ipsum</h1>
    <p class="contribution__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Et condimentum pharetra egestas mauris cursus consectetur. Ultrices viverra pellentesque neque sed quisque orci tortor. Aliquet tincidunt eget nisi, malesuada vitae. Quam sed nisi, interdum neque ullamcorper sagittis, sagittis. Diam viverra eros, lacinia ac. Aliquam, congue aliquam augue id sit interdum. Libero urna, ut cursus volutpat eleifend interdum. Quam condimentum pretium amet ultricies turpis sociis. Facilisi augue in morbi sollicitudin nec libero accumsan. Lectus at ultricies fermentum lacus, faucibus eleifend. Ut pharetra, scelerisque ornare erat. Ipsum non, purus dui egestas a. Leo at at ultrices ultricies consectetur risus.</p>
    <img class="contribution__img" src="{{ asset('files/img/contribution/contribution.jpg') }}" width="100%" height="540px" alt="">

    <ul class="gallery news__gallery">
      @foreach (range(1, 6) as $key)
        <li class="gallery-item">
          <img class="gallery__img" src="{{ asset('files/img/contribution/contribution.jpg') }}" width="100%" height="100%" alt="Какая та фотка">
        </li>
      @endforeach
    </ul>

    <section class="contributions">
      <h2 class="title contributions__title">Lorem Ipsum</h2>
      <p class="contributions-show__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.</p>

      <ul class="card-list contribution-show-list">
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
