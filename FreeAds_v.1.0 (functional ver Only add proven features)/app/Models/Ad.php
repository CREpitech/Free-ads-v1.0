<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $table='ads';

    protected$fillable = [
        'upload_img',
        'title',
        'description',
        'category_id',
        'localisation',
        'price',
    ];
}