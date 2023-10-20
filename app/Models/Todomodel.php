<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todomodel extends Model
{
    protected $table="regtbl";
    protected $fillable=['id','email','username','password'];
    use HasFactory;
}
