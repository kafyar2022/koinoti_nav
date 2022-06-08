<header class="main-header">
  <div class="container main-header__top">
    <a class="main-logo main-header__logo" {{ Route::currentRouteName() !== 'home' ? 'href=' . route('home', ['locale' => app()->getLocale()]) : '' }}>
      <img class="main-logo__img" src="{{ asset('img/main-logo.svg') }}" width="190" height="32" alt="{{ __('Koinoti Nav logotype') }}">
    </a>

    <ul class="contact-list">
      <li class="contact-list__item contact-list__item--email">
        <a class="contact-list__link" href="mailto:{{ $app['texts']['email'] }}">{{ $app['texts']['email'] }}</a>
      </li>
      <li class="contact-list__item contact-list__item--phone">
        <a class="contact-list__link" href="tel:{{ str_replace([' ', '(', ')', '-'], '', $app['texts']['phone']) }}">{{ $app['texts']['phone'] }}</a>
      </li>
    </ul>

    <ul class="social-list main-header__socials">
      @foreach ($app['socials'] as $social)
        <li class="social-item">
          <a class="social-item__link" {{ $social->url ? 'href=' . $social->url : '' }}>
            <i class="social-item__icon" style="{{ $social->icon ? 'background-image: url(/img/icons/social/' . $social->icon . ')' : '' }}"></i>
            {{ $social->title }}
          </a>
        </li>
      @endforeach
    </ul>

    <ul class="locale-list">
      <li class="locale-list__item">
        <a class="locale-list__link {{ app()->currentLocale() === 'ru' ? 'locale-list__link--current' : '' }}" {{ app()->currentLocale() !== 'ru' ? 'href=' . route(Route::currentRouteName(), ['locale' => 'ru', 'category' => request('category')]) : '' }}>Ru</a>
      </li>
      <li class="locale-list__item">
        <a class="locale-list__link {{ app()->currentLocale() === 'en' ? 'locale-list__link--current' : '' }}" {{ app()->currentLocale() !== 'en' ? 'href=' . route(Route::currentRouteName(), ['locale' => 'en', 'category' => request('category')]) : '' }}>En</a>
      </li>
      <li class="locale-list__item">
        <a class="locale-list__link {{ app()->currentLocale() === 'tj' ? 'locale-list__link--current' : '' }}" {{ app()->currentLocale() !== 'tj' ? 'href=' . route(Route::currentRouteName(), ['locale' => 'tj', 'category' => request('category')]) : '' }}>Tj</a>
      </li>
    </ul>
  </div>

  <div class="main-header__bottom">
    <div class="container main-header__bottom-container">
      <ul class="site-navigation">
        <li class="site-navigation__item">
          <a class="site-navigation__link {{ Route::currentRouteName() === 'home' ? 'site-navigation__link--current' : '' }}" {{ Route::currentRouteName() !== 'home' ? 'href=' . route('home', ['locale' => app()->getLocale()]) : '' }}>{{ __('Main') }}</a>
        </li>

        <li class="site-navigation__item">
          <a class="site-navigation__link site-navigation__link--with-extra {{ Route::currentRouteName() === 'about' ? 'site-navigation__link--current' : '' }}">{{ __('About us') }}</a>

          <ul class="page-navigation page-navigation--hidden">
            <li class="page-navigation__item">
              <a class="page-navigation__link" {{ Route::currentRouteName() === 'about' && request('category') === 'history' ? '' : 'href=' . route('about', ['locale' => app()->getLocale(), 'category' => 'history']) }}>{{ __('History') }}</a>
            </li>
            <li class="page-navigation__item">
              <a class="page-navigation__link" {{ Route::currentRouteName() === 'about' && request('category') === 'mission-vision' ? '' : 'href=' . route('about', ['locale' => app()->getLocale(), 'category' => 'mission-vision']) }}>{{ __('Mission, vision, values') }}</a>
            </li>
            <li class="page-navigation__item">
              <a class="page-navigation__link" {{ Route::currentRouteName() === 'about' && request('category') === 'management' ? '' : 'href=' . route('about', ['locale' => app()->getLocale(), 'category' => 'management']) }}>{{ __('Management') }}</a>
            </li>
            <li class="page-navigation__item">
              <a class="page-navigation__link" {{ Route::currentRouteName() === 'about' && request('category') === 'news' ? '' : 'href=' . route('about', ['locale' => app()->getLocale(), 'category' => 'news']) }}>{{ __('News') }}</a>
            </li>
          </ul>
        </li>

        <li class="site-navigation__item">
          <a class="site-navigation__link site-navigation__link--with-extra {{ Route::currentRouteName() === 'projects' ? 'site-navigation__link--current' : '' }}">{{ __('Projects') }}</a>

          <ul class="page-navigation page-navigation--hidden">
            <li class="page-navigation__item">
              <a class="page-navigation__link" {{ Route::currentRouteName() === 'projects' && request('category') === 'implemented-by-us' ? '' : 'href=' . route('projects', ['locale' => app()->getLocale(), 'category' => 'implemented-by-us']) }}>{{ __('Implemented by us') }}</a>
            </li>
            <li class="page-navigation__item">
              <a class="page-navigation__link" {{ Route::currentRouteName() === 'projects' && request('category') === 'with-our-support' ? '' : 'href=' . route('projects', ['locale' => app()->getLocale(), 'category' => 'with-our-support']) }}>{{ __('With our support') }}</a>
            </li>
          </ul>
        </li>

        <li class="site-navigation__item">
          <a class="site-navigation__link site-navigation__link--with-extra {{ Route::currentRouteName() === 'partnership' ? 'site-navigation__link--current' : '' }}">{{ __('Partnership') }}</a>

          <ul class="page-navigation page-navigation--hidden">
            <li class="page-navigation__item">
              <a class="page-navigation__link" {{ Route::currentRouteName() === 'partnership' && request('category') === 'investors-and-states' ? '' : 'href=' . route('partnership', ['locale' => app()->getLocale(), 'category' => 'investors-and-states']) }}>{{ __('Investors and states') }}</a>
            </li>
            <li class="page-navigation__item">
              <a class="page-navigation__link" {{ Route::currentRouteName() === 'partnership' && request('category') === 'startups-and-innovators' ? '' : 'href=' . route('partnership', ['locale' => app()->getLocale(), 'category' => 'startups-and-innovators']) }}>{{ __('Startups and innovators') }}</a>
            </li>
          </ul>
        </li>

        <li class="site-navigation__item">
          <a class="site-navigation__link {{ Route::currentRouteName() === 'contribution' ? 'site-navigation__link--current' : '' }}" {{ Route::currentRouteName() === 'contribution' ? '' : 'href=' . route('contribution', ['locale' => app()->getLocale()]) }}>{{ __('Contribution to society') }}</a>
        </li>

        <li class="site-navigation__item">
          <a class="site-navigation__link {{ Route::currentRouteName() === 'contacts' ? 'site-navigation__link--current' : '' }}" {{ Route::currentRouteName() === 'contacts' ? '' : 'href=' . route('contacts', ['locale' => app()->getLocale()]) }}>{{ __('Contacts') }}</a>
        </li>
      </ul>

      <a class="carrier-link {{ Route::currentRouteName() === 'carrier' ? 'carrier-link--current' : '' }}" {{ Route::currentRouteName() === 'carrier' ? '' : 'href=' . route('carrier', ['locale' => app()->getLocale()])  }}>{{ __('Carrier') }}</a>
    </div>
  </div>
</header>
