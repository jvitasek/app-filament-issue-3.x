<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = ['date'];

    protected function casts(): array
    {
        return [
            'date' => 'date',
        ];
    }
}
