<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class CarrierController extends Controller
{
  public function index($locale)
  {
    $data['texts'] = Helper::getTexts('carrier');

    return view('pages.carrier.index', $data);
  }
}
