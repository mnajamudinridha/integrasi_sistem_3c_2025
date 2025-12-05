<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Nilai extends Model
{
    /** @use HasFactory<\Database\Factories\NilaiFactory> */
    use HasFactory;

    protected $table = 'nilai';

    protected $primaryKey = 'id_nilai';

    protected $fillable = [
        'nim',
        'id_matakuliah',
        'nilai',
    ];

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(Mahasiswa::class, 'nim', 'nim');
    }

    public function matakuliah(): BelongsTo
    {
        return $this->belongsTo(Matakuliah::class, 'id_matakuliah', 'id_matakuliah');
    }
}
