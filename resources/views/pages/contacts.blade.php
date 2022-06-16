@extends('layouts.master')

@section('title')
  @lang('Контакты') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="contact-map" id="map"></div>

    <div class="container">
      <h2 class="title contact__title">@lang('Головной офис')</h2>
      <p class="contact__text">@lang('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.')</p>

      <ul class="card-list ipo-list">
        <li class="card-list__card ipo-card">
          <div class="ipo__inner">
            <h3 class="ipo__title">Инвесторам</h3>
            <p class="ipo__phone">+992 (44) 000 000</p>
            <p class="ipo__email">invest@koinotinav.tj</p>
          </div>
        </li>
        <li class="card-list__card ipo-card">
          <div class="ipo__inner">
            <h3 class="ipo__title">Партнерство</h3>
            <p class="ipo__phone">+992 (44) 000 000</p>
            <p class="ipo__email">parnter@koinotinav.tj</p>
          </div>
        </li>
        <li class="card-list__card ipo-card">
          <div class="ipo__inner">
            <h3 class="ipo__title">Общие вопросы</h3>
            <p class="ipo__phone">+992 (44) 000 000</p>
            <p class="ipo__email">invest@koinotinav.tj</p>
          </div>
        </li>
      </ul>

      <h2 class="title contact__contact-title">Связь с нами</h2>
      <p class="contact__contact-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.</p>
    </div>
  </main>
@endsection
