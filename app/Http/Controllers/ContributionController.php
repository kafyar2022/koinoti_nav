<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;

class ContributionController extends Controller
{
  public function index($lang)
  {
    return view('pages.contribution.index');
  }

  public function show($lang, $slug)
  {
    return view('pages.contribution.show');
  }
}
