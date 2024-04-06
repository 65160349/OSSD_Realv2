<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }
    public function methods()
    {
        return $this->hasMany(Method::class);
    }
}
