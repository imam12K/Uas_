<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Bunga extends Model
{
    use HasFactory;
    protected $table = 'tb_bunga';
    protected $primaryKey = 'bunga_id';
    protected $guarded = '[]';
    protected $fillable = [
        'bunga_id',
        'bunga_id_jenisbunga',
        'bunga_nama',
        'bunga_harga',
        'bunga_stock'
    ];
    public function jenisbunga() :BelongsTo
    {
        return $this->belongsTo(Jenisbunga::class, 'bunga_id_jenisbunga');    
    }
    public function pelanggan() :HasMany
    {
        return $this->hasMany(Pelanggan::class, 'pelanggan_id_bunga', 'bunga_id');    
    }
}
