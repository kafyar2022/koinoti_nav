<article class="employee-card">
  <img class="employee-card__img" src="{{ asset('files/img/employee/ava.jpg') }}" width="100%" height="320" alt="Фотография Мирзоева Сухроба">

  <div class="employee-card__inner">
    <h3 class="employee-card__name">Мирзоев<br>Сухроб</h3>
    <p class="employee-card__position">Креативный директор Бозоршинос</p>

    @php
        $employee = [
          'img' => 'ava.jpg',
          'name' => 'Мирзоев Сухроб',
          'position' => 'Креативный директор Бозоршинос',
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim, vel nec nibh justo. Ornare arcu massa tellus augue. At odio sit leo, nulla vitae, diam. Risus interdum nunc massa sociis risus quis. Metus nunc, odio lacus, blandit dolor quis.

1.Arcu pretium aenean morbi tincidunt malesuada suscipit facilisi.
2.Tristique porta netus diam sit libero
3.volutpat ac. Morbi lorem placerat maecenas at vitae
4.malesuada nunc. Sit pellentesque diam nunc5.
6.orci vitae. Aliquet auctor tortor, risus maecenas diam.
7.Rutrum at eget quam bibendum qua
8.malesuada nunc. Sit pellentesque diam nunc5.
9.orci vitae. Aliquet auctor tortor, risus maecenas diam.'
        ]
    @endphp
    <button class="btn employee-card__btn" type="button" data-employee="{{ json_encode($employee) }}">@lang('Подробнее')</button>
  </div>
</article>
