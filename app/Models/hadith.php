<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hadith extends Model
{
    use HasFactory;
    protected $fillable = [
      'order',
      'title',
      'head',
      'content',
      'end'
      
      ];
}
