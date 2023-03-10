<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $fillable = [
        'judul',
        'penulis',
        'tgl_rilis'
    ];

    public function reviews(){
        return $this->hasMany(BookReviews::class, 'review_id');
    }
}