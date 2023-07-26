<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    public function setName(String $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

}
