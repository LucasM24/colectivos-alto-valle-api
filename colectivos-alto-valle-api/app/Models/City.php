<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasUlids;

    protected $hidden = ['created_at', 'updated_at'];
    protected $fillable = ['name', 'province'];
}
