@props(['class', 'histories'])

<section class="glide history-glide history-glide--closed-filter {{ $class }}">
  <h2 class="history-glide__title">{{ __('History of the company') }}</h2>

  <div class="history-glide__filter" data-glide-el="controls[nav]">
    @foreach ($histories as $key => $history)
      <button class="history-glide__filter-item" data-glide-dir="={{ $key }}">{{ $history->year }}</button>
    @endforeach
  </div>

  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      @foreach ($histories as $history)
        <li class="glide__slide history-glide__slide">
          <p class="history-glide__text">{{ $history->history }}</p>
        </li>
      @endforeach
    </ul>
  </div>

  <div class="glide__bullets history-glide__bullets" data-glide-el="controls[nav]">
    @foreach ($histories as $key => $history)
      <button class="glide__bullet history-glide__bullet" data-glide-dir="={{ $key }}"></button>
    @endforeach
  </div>
</section>
