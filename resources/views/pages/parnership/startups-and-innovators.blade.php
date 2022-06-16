@extends('layouts.master')

@section('title')
  @lang('Партнерство') | @lang('Коиноти нав')
@endsection

@section('content')
  <main class="main-content">
    <div class="board partnership-si__board">
      <div class="container">
        <div class="board__inner">
          <h1 class="board__title">@lang('Наше видение')</h1>
          <p class="board__text">@lang('Развиваясь инновационно и динамично<br>занять лидирующее положение в сферах деятельности')</p>

          <a class="play-video partnership-si__play-video">@lang('Смотреть<br>видео')</a>
        </div>
      </div>
    </div>

    <div class="container">
      <section class="feedback">
        <div class="feedback__left">
          <h2 class="title feedback__title">Lorem Ipsum</h2>
          <p class="feedback__txt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Habitant condimentum aenean mauris, lacinia pharetra consequat, pharetra. Lectus venenatis, facilisi sed augue massa odio integer viverra a. Libero ut et, egestas felis. Duis penatibus eu, dictumst viverra eu, pharetra nam id. Rhoncus praesent ac sed leo a dolor. Et, nunc vulputate tortor in. Nunc tellus blandit nam eget cras. Ac aliquet phasellus rhoncus, dolor. Venenatis, odio sed lectus porta vitae nec bibendum. Tincidunt enim est, enim, nulla eget gravida. At egestas amet, lorem purus non. Amet nam duis diam fermentum lorem dignissim. Ullamcorper in donec nulla dignissim pretium sed aliquam.</p>
          <p class="feedback__txt">Justo est odio sed faucibus commodo in. Risus lectus ipsum orci, duis ante sapien, amet libero, tellus. At ac lobortis arcu, diam. Lacus eu purus ultricies sed gravida lectus eget. Sed ipsum, tellus euismod condimentum. Nulla hendrerit tempor elementum eros elementum rhoncus tempor. Lectus amet urna turpis euismod nec velit fringilla vitae nulla. Egestas id cursus sollicitudin arcu, quis venenatis sit cursus. Laoreet interdum eu augue egestas viverra aliquet. Natoque sapien, elementum lobortis elementum. Amet, diam quisque nullam consectetur nibh nec egestas. Tempus sem tellus elit placerat enim. Integer faucibus sed convallis neque, pretium, eu.</p>
          <p class="feedback__txt">Orci risus blandit in duis sagittis ipsum nulla massa nisl. Nisi, aliquet in gravida leo, amet fermentum. Convallis fermentum, fermentum aliquet nisl nisl semper purus tempor amet. Vestibulum vitae, nunc, ipsum, sed et orci cum at tellus. Interdum aliquam interdum tristique cras vel eros, dignissim sed tincidunt. Gravida vitae velit metus sem sed ut odio sed volutpat. Risus leo aliquam aliquam donec iaculis. Volutpat cras tellus nunc nisi sit blandit cursus aliquam nunc. Tristique varius fermentum adipiscing diam id integer molestie ipsum. Morbi nunc pretium sed tempor urna elementum. Sit gravida consectetur eu arcu. Eu, nisl, nec nulla tincidunt.</p>
          <p class="feedback__txt">Nam nunc, habitant leo risus tortor mi imperdiet. Condimentum cursus velit egestas proin erat enim quis proin est.</p>
        </div>

        <form class="feedback-form">
          <h3 class="title feedback-form__title">Форма обратной связи</h3>
          <p class="feedback-form__subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed ullamcorper.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ornare vitae sed aliquam sed</p>

          <input class="feedback-form__field" type="text" name="name" placeholder="@lang('Ваше имя и фамилия')">
          <input class="feedback-form__field" type="tel" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{2}-[0-9]{2}" placeholder="@lang('Контактный номер')">
          <input class="feedback-form__field" type="email" name="email" placeholder="@lang('Ваша электронная почта')">
          <input class="feedback-form__field" type="text" name="theme" placeholder="@lang('Тема обращения')">
          <textarea class="feedback-form__field feedback-form__field--text" name="msg" id="" cols="30" rows="10" placeholder="@lang('Опишите свой запрос')"></textarea>
          <div class="feedback-form__footer">
            <input class="visually-hidden feedback-form__privacy-policy" id="privacy-policy" type="checkbox" name="privacy_policy">
            <label class="feedback-form__label" for="privacy-policy">
              <p>@lang('Я принимаю<br>пользовательское соглашение')</p>
            </label>
            <button class="btn feedback-form__submit" type="submit">@lang('Отправить')</button>
          </div>
        </form>
      </section>

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

      <h2 class="title partnership__contact-title">Связь с нами</h2>
      <p class="partnership-si__contact-subtitle">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim aliquam pellentesque facilisis egestas risus egestas sit gravida.</p>
    </div>
  </main>
@endsection
