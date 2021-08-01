<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upcoming extends Model
{
    protected $table = 'upcomings';
    use HasFactory;
    protected $fillable = ['title','completed','approved','waiting','taskId'];
}
