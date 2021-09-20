<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    protected $table = 'registers';


    protected $primaryKey = 'id';

    protected $fillable = ['fullname','email','username','Address','ContactNo'];
}
