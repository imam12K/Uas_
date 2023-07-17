<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jenisbunga extends Model
{
    use HasFactory;
    protected $table = 'tb_jenisbunga';
    protected $primaryKey = 'jenisbunga_id';
    protected $guarded = '[]';
    protected $fillable = [
        'jenisbunga_id',
        'jenisbunga_nama'
    ];
    public function bunga() :HasMany
    {
        return $this->hasMany(Bunga::class, 'bunga_id_jenisbunga', 'bunga_id');    
    }
}
