<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $filliable=[
          'user_id','qualification','contact_no'
    ];
    protected $table='students';
    public $timestamp=true;
}
