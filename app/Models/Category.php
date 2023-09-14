<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function berkas()
    {
        return $this->hasMany(Berkas::class);
    }

    public function berkaslog()
    {
        return $this->hasMany(BerkasLog::class);
    }
}
