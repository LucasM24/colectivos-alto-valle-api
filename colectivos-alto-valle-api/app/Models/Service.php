<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasUlids;

    public function setName(String $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

}
