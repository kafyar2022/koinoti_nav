<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\News;
use App\Models\Project;

class MainController extends Controller
{
  public function index($lang)
  {
    $data['histories'] = History::where('lang', $lang)
      ->orderBy('year', 'asc')
      ->get();

    $data['news'] = News::where('lang', $lang)
      ->latest()
      ->take(3)
      ->get();

    $data['projects'] = Project::where('lang', $lang)
      ->get();

    return view('pages.home', compact('data'));
  }
}
