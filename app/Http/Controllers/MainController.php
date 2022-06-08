<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function index()
  {
    $data['texts'] = Helper::getTexts('home');

    return view('pages.home', $data);
  }
}
