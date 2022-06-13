<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
  use HasFactory, Sluggable;

  public function sluggable()
  {
    return [
      'slug' => [
        'source' => 'en_title'
      ]
    ];
  }
}
