<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'book';
    protected $fillable = ['judul', 'pengarang', 'tahun_terbit'];
}
