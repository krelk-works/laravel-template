<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ciutat extends Model
{
    protected $table = 'ciutats';

    protected $fillable = [
        'nom',
        'n_habitants',
    ];

    public function casals()
    {
        return $this->hasMany(Casal::class, 'id_ciutat');
    }
}
