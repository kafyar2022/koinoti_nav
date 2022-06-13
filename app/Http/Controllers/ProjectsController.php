<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
  public function index($locale, $category)
  {
    $data['texts'] = Helper::getTexts('projects');

    switch ($category) {
      case 'implemented-by-us':
        return view('pages.projects', $data);

      case 'with-our-support':
        return view('pages.projects', $data);

      default:
        return view('pages.projects', $data);
    }
  }
}
