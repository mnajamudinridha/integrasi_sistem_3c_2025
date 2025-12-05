<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Prodi extends Model
{
    /** @use HasFactory<\Database\Factories\ProdiFactory> */
    use HasFactory;

    protected $table = 'prodi';

    protected $primaryKey = 'id_prodi';

    protected $fillable = [
        'nama_prodi',
    ];

    public function mahasiswa(): HasMany
    {
        return $this->hasMany(Mahasiswa::class, 'id_prodi', 'id_prodi');
    }
}
