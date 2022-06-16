<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;

class CarrierController extends Controller
{
  public function index($lang)
  {
    return view('pages.carrier.index');
  }
}
