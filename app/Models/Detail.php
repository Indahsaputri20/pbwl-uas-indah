<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Detail extends Model
{
    use HasFactory;
    protected $table = 'tb_detail';
    protected $primaryKey = 'detail_id';
    protected $guarded = '[]';
    protected $fillable = [
        'detail_id',
        'detail_pelanggan_id',
        'detail_barang_id',
        'detail_jumlah'
    ];
    public function pelanggan() :BelongsTo
    {
        return $this->belongsTo(Pelanggan::class, 'detail_pelanggan_id');    
    }

    public function barang() :BelongsTo
    {
        return $this->belongsTo(Barang::class, 'detail_barang_id');    
    }
}
