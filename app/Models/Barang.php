<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barangs';
    protected $primaryKey = 'idbarang';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'namabarang',
        'kategoribarang',
        'jumlahstok',
        'hargabarang',
        'tanggalmasuk',
    ];
}

