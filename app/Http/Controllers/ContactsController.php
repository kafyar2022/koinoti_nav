<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;

class ContactsController extends Controller
{
  public function index($lang)
  {
    return view('pages.contacts');
  }
}
