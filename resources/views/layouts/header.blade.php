<header class="main-header">
  <div class="container main-header__top">
    <a class="main-logo main-header__logo @if ($route == 'home') main-logo--disabled @endif" href="{{ route('home', $lang) }}">
      <img class="main-logo__img" src="{{ asset('img/main-logo.svg') }}" width="190" height="32" alt="@lang('Логотип Коиноти нав')">
    </a>

    <ul class="contact-list">
      <li class="contact-list__item contact-list__item--email">
        <a class="contact-list__link" href="mailto:info@koinotinav.tj">info@koinotinav.tj</a>
      </li>
      <li class="contact-list__item contact-list__item--phone">
        <a class="contact-list__link" href="tel:+992918556464">+992 918 55 64 64</a>
      </li>
    </ul>

    <ul class="social-list main-header__socials">
      <li class="social-item">
        <a class="social-item__link" href="#" target="_blank">
          <img class="social-item__logo" src="{{ asset('files/img/socials/facebook.svg') }}" width="24" height="24" alt="@lang('Фейсбук')" title="@lang('Фейсбук')">
        </a>
      </li>
      <li class="social-item">
        <a class="social-item__link" href="#" target="_blank">
          <img class="social-item__logo" src="{{ asset('files/img/socials/instagram.svg') }}" width="24" height="24" alt="@lang('Инстаграм')" title="@lang('Инстаграм')">
        </a>
      </li>
      <li class="social-item">
        <a class="social-item__link" href="#" target="_blank">
          <img class="social-item__logo" src="{{ asset('files/img/socials/linkedin.svg') }}" width="24" height="24" alt="@lang('Линкед ин')" title="@lang('Линкед ин')">
        </a>
      </li>
    </ul>

    <ul class="locale-list">
      @foreach (config('app.available_locales') as $locale)
        <li class="locale-list__item">
          <a class="locale-list__link @if ($locale == $lang) locale-list__link--current @endif">{{ ucfirst($locale) }}</a>
        </li>
      @endforeach
    </ul>
  </div>

  <div class="main-header__bottom">
    <div class="container main-header__bottom-container">
      <ul class="site-navigation">
        <li class="site-navigation__item">
          <a class="site-navigation__link @if ($route == 'home') site-navigation__link--current @endif" href="{{ route('home', $lang) }}">@lang('Главная')</a>
        </li>

        <li class="site-navigation__item">
          <a class="site-navigation__link site-navigation__link--with-extra @if ($route == 'about') site-navigation__link--current @endif">@lang('О нас')</a>

          <ul class="page-navigation page-navigation--hidden">
            <li class="page-navigation__item">
              <a class="page-navigation__link @if ($route == 'about' && request('category') == 'history') page-navigation__link--current @endif" href="{{ route('about', ['lang' => $lang, 'category' => 'history']) }}">@lang('История')</a>
            </li>
            <li class="page-navigation__item">
              <a class="page-navigation__link @if ($route == 'about' && request('category') == 'mission-vision') page-navigation__link--current @endif" href="{{ route('about', ['lang' => $lang, 'category' => 'mission-vision']) }}">@lang('Миссия, видение, ценности')</a>
            </li>
            <li class="page-navigation__item">
              <a class="page-navigation__link @if ($route == 'about' && request('category') == 'management') page-navigation__link--current @endif" href="{{ route('about', ['lang' => $lang, 'category' => 'management']) }}">@lang('Менеджмент')</a>
            </li>
            <li class="page-navigation__item">
              <a class="page-navigation__link @if ($route == 'about' && request('category') == 'news') page-navigation__link--current @endif" href="{{ route('about', ['lang' => $lang, 'category' => 'news']) }}">@lang('Новости')</a>
            </li>
          </ul>
        </li>

        <li class="site-navigation__item">
          <a class="site-navigation__link site-navigation__link--with-extra @if ($route == 'projects') site-navigation__link--current @endif">@lang('Проекты')</a>

          <ul class="page-navigation page-navigation--hidden">
            <li class="page-navigation__item">
              <a class="page-navigation__link @if ($route == 'projects' && request('category') == 'implemented-by-us') page-navigation__link--current @endif" href="{{ route('projects', ['lang' => $lang, 'category' => 'implemented-by-us']) }}">@lang('Реализованные нами')</a>
            </li>
            <li class="page-navigation__item">
              <a class="page-navigation__link @if ($route == 'projects' && request('category') == 'with-our-support') page-navigation__link--current @endif" href="{{ route('projects', ['lang' => $lang, 'category' => 'with-our-support']) }}">@lang('При нашей поддержке')</a>
            </li>
          </ul>
        </li>

        <li class="site-navigation__item">
          <a class="site-navigation__link site-navigation__link--with-extra @if ($route == 'partnership') site-navigation__link--current @endif">@lang('Партнерство')</a>

          <ul class="page-navigation page-navigation--hidden">
            <li class="page-navigation__item">
              <a class="page-navigation__link @if ($route == 'partnership' && request('category') == 'investors-and-states') page-navigation__link--current @endif" href="{{ route('partnership', ['lang' => $lang, 'category' => 'investors-and-states']) }}">@lang('Инвесторам и государствам')</a>
            </li>
            <li class="page-navigation__item">
              <a class="page-navigation__link @if ($route == 'partnership' && request('category') == 'startups-and-innovators') page-navigation__link--current @endif" href="{{ route('partnership', ['lang' => $lang, 'category' => 'startups-and-innovators']) }}">@lang('Стартаперам и новаторам')</a>
            </li>
          </ul>
        </li>

        <li class="site-navigation__item">
          <a class="site-navigation__link @if ($route == 'contribution') site-navigation__link--current @endif" href="{{ route('contribution', $lang) }}">@lang('Вклад в общество')</a>
        </li>

        <li class="site-navigation__item">
          <a class="site-navigation__link @if ($route == 'contacts') site-navigation__link--current @endif" href="{{ route('contacts', $lang) }}">@lang('Контакты')</a>
        </li>
      </ul>

      <a class="carrier-link @if ($route == 'carrier') carrier-link--current @endif" href="{{ route('carrier', $lang) }}">@lang('Карьера')</a>
    </div>
  </div>
</header>
