<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    // relazione tra tabella technologies e projects   (many to many con tabella ponte)
    public function projects() {
        return $this->belongsToMany(Project::class);
    }
}
