<?php

// app/Models/Desa.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
    use HasFactory;

    protected $fillable = [
        'kecamatan', 
        'desa', 
        'tahun'
    ];
}
