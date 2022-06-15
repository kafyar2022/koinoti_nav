<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;

class PartnershipController extends Controller
{
  public function index($lang, $category)
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
