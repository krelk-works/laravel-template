<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Incidencia extends Model
{
    protected $table = 'incidencias';

    protected $fillable = [
        'descripcion',
        'tipo',
        'estado',
        'nick',
    ];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(User::class, 'nick');
    }
}
