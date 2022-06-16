<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\News;
use App\Models\Value;

class AboutController extends Controller
{
  public function index($lang, $category)
  {
    switch ($category) {
      case 'history':
        $data['histories'] = History::where('lang', $lang)
          ->orderBy('year', 'asc')
          ->get();

        return view('pages.about.history', compact('data'));

      case 'mission-vision':
        $data['values'] = Value::where('lang', $lang)
          ->get();

        return view('pages.about.mvv', compact('data'));

      case 'management':
        return view('pages.about.management');

      case 'news':
        $data['news'] = News::where('lang', $lang)
          ->paginate(9);

        return view('pages.about.news.index', compact('data'));
    }
  }

  public function newsShow($lang, $slug)
  {
    $data['new'] = News::where('slug', $slug)
      ->first();

    $data['news'] = News::where('lang', $lang)
      ->latest()
      ->take(3)
      ->get();

    return view('pages.about.news.show', compact('data'));
  }
}
