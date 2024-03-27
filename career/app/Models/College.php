<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    use HasFactory;
    protected $filliable=[
        'user_id','contact_no','address','state','district','university'
  ];
  protected $table='colleges';
  public $timestamp=true;
}
