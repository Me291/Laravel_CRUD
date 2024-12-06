<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    // Define the $fillable property to allow mass assignment
    protected $fillable = [
        'nim',
        'nama',
        'email',
        'jenis_kelamin',
        'jurusan',
        'alamat',
    ];
}
