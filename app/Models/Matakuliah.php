<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Matakuliah extends Model
{
    /** @use HasFactory<\Database\Factories\MatakuliahFactory> */
    use HasFactory;

    protected $table = 'matakuliah';

    protected $primaryKey = 'id_matakuliah';

    protected $fillable = [
        'nama_matakuliah',
        'sks',
    ];

    public function nilai(): HasMany
    {
        return $this->hasMany(Nilai::class, 'id_matakuliah', 'id_matakuliah');
    }
}
