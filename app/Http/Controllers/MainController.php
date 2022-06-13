<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\History;
use App\Models\News;
use App\Models\Project;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index($locale)
  {
    $data['texts'] = Helper::getTexts('home');

    $data['histories'] = History::select(
      'id',
      'year',
      $locale . '_history as history'
    )
      ->orderBy('year', 'asc')
      ->get();

    $data['news'] = News::select(
      'slug',
      $locale . '_title as title',
      $locale . '_text as text',
      'img',
      'created_at'
    )->latest()->take(3)->get();

    $data['projects'] = Project::select(
      $locale . '_title as title',
      'url',
      'logo',
    )->get();

    return view('pages.home', compact('data'));
  }
}
