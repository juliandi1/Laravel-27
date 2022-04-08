<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $fillable = ['provider_id', 'number'];

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }
}
