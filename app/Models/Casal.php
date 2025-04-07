<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Casal extends Model
{
    protected $table = 'casals';

    protected $fillable = [
        'nom',
        'data_inici',
        'data_final',
        'n_places',
        'id_ciutat',
    ];

    public function ciutat(): BelongsTo
    {
        return $this->belongsTo(Ciutat::class, 'id_ciutat');
    }
}
