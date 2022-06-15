@props(['project'])

<article class="project-card">
  <h2 class="title project-card__title">{{ $project->title }}</h2>

  <img class="project-card__img" src="{{ asset('files/img/projects/' . $project->logo) }}" alt="{{ $project->title }}" width="165" height="112">
  <a class="project-card__link" href="{{ $project->url }}">{{ $project->url }}</a>
</article>
