<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = ['breakfast','lunch','dinner','date'];

    public static $rules = array(
      'breakfast','lunch','dinner'=> 'required'
  );
}
