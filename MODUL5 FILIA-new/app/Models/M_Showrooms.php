<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Showrooms extends Model
{
    protected $table = 'showrooms';
    use HasFactory;
    public $timestamp = false;

    protected $guarder = ['id'];
    protected $fillable = [
        'name',
        'owner',
        'brand',
        'purchase_date',
        'description',
        'image',
        'status'
    ];


}
