<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Geomean extends Model
{
    use HasFactory;

    protected $fillable = [
        'kriteria_id',
        'hasil',
        'user_id',
    ];

    public function Kriteria(): BelongsTo
    {
        return $this->belongsTo(Kriteria::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
