<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'tb_barang';
    protected $primaryKey = 'barang_id';
    protected $guarded = '[]';
    protected $fillable = [
        'barang_id',
        'barang_nama',
        'barang_harga'
    ];
    public function detail() :HasMany
    {
        return $this->hasMany(Detail::class, 'detail_barang_id', 'barang_id');    
    }
}
