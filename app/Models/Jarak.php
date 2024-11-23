<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jarak extends Model
{
    use HasFactory;

    protected $table = 'jarak';
    protected $guarded = ['id'];

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
