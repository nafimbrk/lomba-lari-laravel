<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $table = 'pendaftaran';

    protected $fillable = ['peserta_id', 'jarak_id', 'waktu_tempuh'];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function jarak()
    {
        return $this->belongsTo(Jarak::class);
    }
}
