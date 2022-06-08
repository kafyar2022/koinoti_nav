<?php

/**
 * Custom helper class
 * @author Ikrom Rahimov fleck97rgb@gmail.com
 */

namespace App\Helpers;

use App\Models\Text;

class Helper
{
  public static function getTexts($pageName)
  {
    $texts = Text::select(
      'caption',
      'page',
      app()->currentLocale() . '_text as text',
    )
    ->where('page', $pageName)
      ->orWhere('page', 'all')
      ->get();

    foreach ($texts as $text) {
      $response[$text->caption] = $text->text;
    }

    return $response;
  }
}
