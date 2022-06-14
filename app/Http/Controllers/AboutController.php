<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\History;
use App\Models\Value;
use Illuminate\Http\Request;

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
        return view('pages.about.management', compact('data'));

      case 'news':
        return view('pages.about.news', compact('data'));
    }
  }
}
