<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class ContributionController extends Controller
{
  public function index($locale)
  {
    $data = Helper::getTexts('contribution');

    return view('pages.contribution', $data);
  }
}
