<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * @var string
     */
    protected $table = 'products';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'price',
        'details',
        'publish',
    ];
}