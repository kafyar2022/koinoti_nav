<footer class="main-footer">
  <div class="main-footer__top">
    <div class="container main-footer__top-container">
      <dl class="footer-navigation">
        <div class="footer-navigation__inner">
          <dt class="footer-navigation__term">@lang('О нас')</dt>

          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('about', ['lang' => $lang, 'category' => 'history']) }}">@lang('История')</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('about', ['lang' => $lang, 'category' => 'mission-vision']) }}">@lang('Миссия, видение, ценности')</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('about', ['lang' => $lang, 'category' => 'management']) }}">@lang('Менеджмент')</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('about', ['lang' => $lang, 'category' => 'news']) }}">@lang('Новости')</a>
          </dd>
        </div>

        <div class="footer-navigation__inner">
          <dt class="footer-navigation__term">@lang('Проекты')</dt>

          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('projects', ['lang' => $lang, 'category' => 'implemented-by-us']) }}">@lang('Реализованные нами')</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('projects', ['lang' => $lang, 'category' => 'with-our-support']) }}">@lang('При нашей поддержке')</a>
          </dd>
        </div>

        <div class="footer-navigation__inner">
          <dt class="footer-navigation__term">@lang('Партнерство')</dt>

          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('partnership', ['lang' => $lang, 'category' => 'investors-and-states']) }}">@lang('Инвесторам и государствам')</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('partnership', ['lang' => $lang, 'category' => 'startups-and-innovators']) }}">@lang('Стартаперам и новаторам')</a>
          </dd>
        </div>

        <div class="footer-navigation__inner">
          <dt class="footer-navigation__term">@lang('Прочее')</dt>

          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('contribution', $lang) }}">@lang('Вклад в общество')</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('contacts', $lang) }}">@lang('Контакты')</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('carrier', $lang) }}">@lang('Карьера')</a>
          </dd>
        </div>
      </dl>

      <button class="scroll-top-btn" type="button" title="@lang('На вверх')"></button>
    </div>
  </div>

  <div class="container main-footer__bottom-container">
    <ul class="contact-list main-footer__contact-list">
      <li class="contact-list__item contact-list__item--email">
        <a class="contact-list__link" href="mailto:info@koinotinav.tj">info@koinotinav.tj</a>
      </li>
      <li class="contact-list__item contact-list__item--phone">
        <a class="contact-list__link" href="tel:+992918556464">+992 918 55 64 64</a>
      </li>
    </ul>

    <ul class="social-list">
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

    <p class="copyright main-footer__copyright">@lang('© 2020 Коиноти нав <br> Все права защищены')</p>
  </div>
</footer>
