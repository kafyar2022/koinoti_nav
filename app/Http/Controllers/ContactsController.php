<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
  public function index($locale)
  {
    $data['texts'] = Helper::getTexts('contacts');

    return view('pages.contacts', $data);
  }
}
