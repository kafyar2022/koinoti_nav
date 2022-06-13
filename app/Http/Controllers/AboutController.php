<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\History;
use App\Models\Value;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index($locale, $category)
  {
    $data['texts'] = Helper::getTexts('about.' . $category);

    $data['histories'] = History::select(
      'id',
      'year',
      $locale . '_history as history'
    )
      ->orderBy('year', 'asc')
      ->get();

    switch ($category) {
      case 'history':
        return view('pages.about.history', compact('data'));

      case 'mission-vision':
        $data['values'] = Value::select(
          $locale . '_title as title',
          $locale . '_text as text',
        )->get();

        return view('pages.about.mvv', compact('data'));

      case 'management':
        return view('pages.about.management', compact('data'));

      case 'news':
        return view('pages.about.news', compact('data'));
    }
  }
}
