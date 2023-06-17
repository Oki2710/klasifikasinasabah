<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;
    protected $table = 'nasabah';
    protected $fillable = ['nama', 'suku_bunga', 'jangka_waktu', 'plafond_kredit', 'sisa_hutang', 'bunga', 'angsuran_pokok', 'jumlah_tanggunan', 'jaminan', 'kolektibilitas'];
}
