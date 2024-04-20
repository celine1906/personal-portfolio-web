<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $table = 'portfolio';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['image', 'title', 'description'];
}
