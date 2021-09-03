<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    use HasFactory;

    protected $fillable = ['breakfast','lunch','dinner'];

    public static $rules = array(
      'breakfast' => 'required'
      'lunch' => 'required'
      'dinner' => 'required'
  );

    public function create()
    {
      Meal::create([
        'breakfast' => 'パン',
        'lunch' => '親子丼',
        'dinner' => 'ハンバーグ'
      ]);
    }
}
