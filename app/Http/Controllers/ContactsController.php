<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;

class ContactsController extends Controller
{
  public function index($locale)
  {
    $data['texts'] = Helper::getTexts('contacts');

    return view('pages.contacts', $data);
  }
}
