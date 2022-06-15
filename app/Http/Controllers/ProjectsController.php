<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectsController extends Controller
{
  public function index($lang)
  {
    if (request('category')) {
      $data['projects'] = Project::where('lang', $lang)
        ->where('category', request('category'))
        ->paginate(9);

      return view('pages.projects', compact('data'));
    }

    $data['projects'] = Project::where('lang', $lang)
      ->paginate(9);

    return view('pages.projects', compact('data'));
  }
}
