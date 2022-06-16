<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\Principle;

class CarrierController extends Controller
{
  public function index($lang)
  {
    $data['principles'] = Principle::where('lang', $lang)
      ->get();

    return view('pages.carrier.index', compact('data'));
  }

  public function test($lang)
  {
    return view('pages.carrier.test');
  }
}
