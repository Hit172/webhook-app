<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Git extends Model
{
    use HasFactory;

	protected $table = 'git';
    protected $fillable = ['commitId', 'message'];

}
