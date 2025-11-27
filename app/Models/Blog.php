<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Blog extends Model
{
    //
    use HasFactory;
    //
    protected $table = 'blogs';
    //
    protected $fillable = ['image', 'title', 'description', 'author_id'];
    //
    protected $guarded = [];
    //
    public $timestamps = true;
}
