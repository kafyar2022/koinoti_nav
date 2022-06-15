<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;

class ContributionController extends Controller
{
  public function index($lang)
  {
    $data = Helper::getTexts('contribution');

    return view('pages.contribution', $data);
  }
}
