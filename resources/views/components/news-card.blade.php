@props(['news'])

<article class="news-card">
  <h3 class="title news-card__title">{{ $news->title }}</h3>

  <time class="news-card__date" datetime="{{ $news->created_at }}">{{ $news->created_at }}</time>
  <p class="news-card__text">{{ $news->text }}</p>
  <img class="news-card__img" src="{{ asset('files/news/img/' . $news->img) }}" width="100%" height="180" alt="{{ $news->title }}">

  <a class="news-card__btn" href="{{ route('about.news.show', ['lang' => app()->getLocale(), 'slug' => $news->slug]) }}">@lang('Подробнее')</a>
</article>
