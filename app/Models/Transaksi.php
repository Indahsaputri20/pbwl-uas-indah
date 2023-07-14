<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'tb_transaksi';
    protected $primaryKey = 'transaksi_id';
    protected $guarded = '[]';
    protected $fillable = [
        'transaksi_id',
        'transaksi_id_pelanggan',
        'transaksi_tanggal',
        'transaksi_kapster'
    ];
    public function pelanggan() :BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'transaksi_id_pelanggan');    
    }
    public function detail() :HasMany
    {
        return $this->hasMany(Detail::class, 'detail_transaksi_id', 'barang_id');    
    }
}
