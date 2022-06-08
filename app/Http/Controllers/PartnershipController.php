<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class PartnershipController extends Controller
{
  public function index($locale, $category)
  {
    $data['texts'] = Helper::getTexts('partnership.' . $category);

    switch ($category) {
      case 'investors-and-states':
        return view('pages.parnership.investors-and-states', $data);

      case 'startups-and-innovators':
        return view('pages.parnership.startups-and-innovators', $data);
      }
  }
}
