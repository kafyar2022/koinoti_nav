<footer class="main-footer">
  <div class="main-footer__top">
    <div class="container main-footer__top-container">
      <dl class="footer-navigation">
        <div class="footer-navigation__inner">
          <dt class="footer-navigation__term">{{ __('About us') }}</dt>

          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('about', ['locale' => app()->getLocale(), 'category' => 'history']) }}">{{ __('History') }}</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('about', ['locale' => app()->getLocale(), 'category' => 'mission-vision']) }}">{{ __('Mission, vision, values') }}</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('about', ['locale' => app()->getLocale(), 'category' => 'management']) }}">{{ __('Management') }}</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('about', ['locale' => app()->getLocale(), 'category' => 'news']) }}">{{ __('News') }}</a>
          </dd>
        </div>

        <div class="footer-navigation__inner">
          <dt class="footer-navigation__term">{{ __('Projects') }}</dt>

          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('projects', ['locale' => app()->getLocale(), 'category' => 'implemented-by-us']) }}">{{ __('Implemented by us') }}</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('projects', ['locale' => app()->getLocale(), 'category' => 'with-our-support']) }}">{{ __('With our support') }}</a>
          </dd>
        </div>

        <div class="footer-navigation__inner">
          <dt class="footer-navigation__term">{{ __('Partnership') }}</dt>

          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('partnership', ['locale' => app()->getLocale(), 'category' => 'investors-and-states']) }}">{{ __('Investors and states') }}</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('partnership', ['locale' => app()->getLocale(), 'category' => 'startups-and-innovators']) }}">{{ __('Startups and innovators') }}</a>
          </dd>
        </div>

        <div class="footer-navigation__inner">
          <dt class="footer-navigation__term">{{ __('Other') }}</dt>

          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('contribution', ['locale' => app()->getLocale()]) }}">{{ __('Contribution to society') }}</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('contacts', ['locale' => app()->getLocale()]) }}">{{ __('Contacts') }}</a>
          </dd>
          <dd class="footer-navigation__item">
            <a class="footer-navigation__link" href="{{ route('carrier', ['locale' => app()->getLocale()]) }}">{{ __('Carrier') }}</a>
          </dd>
        </div>
      </dl>

      <button class="scroll-top-btn" type="button" title="{{ __('To top') }}"></button>
    </div>
  </div>

  <div class="container main-footer__bottom-container">
    <ul class="contact-list main-footer__contact-list">
      <li class="contact-list__item contact-list__item--email">
        <a class="contact-list__link" href="mailto:{{ $app['texts']['email'] }}">{{ $app['texts']['email'] }}</a>
      </li>
      <li class="contact-list__item contact-list__item--phone">
        <a class="contact-list__link" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $app['texts']['phone']) }}">{{ $app['texts']['phone'] }}</a>
      </li>
    </ul>

    <ul class="social-list">
      @foreach ($app['socials'] as $social)
        <li class="social-item">
          <a class="social-item__link" {{ $social->url ? 'href=' . $social->url : '' }}>
            <i class="social-item__icon" style="{{ $social->icon ? 'background-image: url(/img/icons/social/' . $social->icon . ')' : '' }}"></i>
            {{ $social->title }}
          </a>
        </li>
      @endforeach
    </ul>

    <p class="copyright main-footer__copyright">{{ $app['texts']['copyright'] }}</p>
  </div>
</footer>
