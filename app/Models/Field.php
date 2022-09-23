<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    public function contents()
    {
        return $this->hasMany(Content::class);
    }

    public function customers()
    {
        return $this->hasMany(Customer::class);
    }
}
