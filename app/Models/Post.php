<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts'; //table name

    public $primaryKey = 'id'; //primary key

    public $timestamps = 'true'; //timestamps
}
