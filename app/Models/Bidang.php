<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bidang extends Model
{
    public $timestamps = false;
    protected $table = 'bidang';
    
    use HasFactory;
}
