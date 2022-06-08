<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
  public function index($locale, $category)
  {
    $data['texts'] = Helper::getTexts('projects.' . $category);

    switch ($category) {
      case 'implemented-by-us':
        return view('pages.projects.implemented-by-us', $data);

      case 'with-our-support':
        return view('pages.projects.with-our-support', $data);
    }
  }
}
