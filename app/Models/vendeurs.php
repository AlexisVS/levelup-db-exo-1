<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendeurs extends Model
{
    use HasFactory;

    public function commands () {
        return $this->hasOne(commandes::class);
    }

    public function clients () {
        return $this->hasOne(Clients::class);
    }
}
