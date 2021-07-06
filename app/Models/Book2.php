<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book2 extends Model
{
    protected $table = "books2";
    protected $fillable = ['noTk','ringkasK','alamatK','tanggalK','ketKeluar'];
}
