<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class DireccionesModel extends Model
{
    use HasFactory;

    protected $table = 'direcciones';

    public function model(): MorphTo
    {
        return $this->morphTo();
    }
}
