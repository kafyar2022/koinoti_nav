<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;

class PartnershipController extends Controller
{
  public function index($lang, $category)
  {
    return view('pages.parnership.' . $category);
  }
}
