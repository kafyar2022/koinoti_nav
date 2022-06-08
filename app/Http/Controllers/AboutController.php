<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  public function index($locale, $category)
  {
    $data['texts'] = Helper::getTexts('about.' . $category);

    switch ($category) {
      case 'history':
        return view('pages.about.history', $data);

      case 'mission-vision':
        return view('pages.about.mvv', $data);

      case 'management':
        return view('pages.about.management', $data);

      case 'news':
        return view('pages.about.news', $data);
    }
  }
}
