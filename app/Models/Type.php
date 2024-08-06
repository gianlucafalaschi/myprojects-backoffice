<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;
    
    // relazione tra projects e types   one to many, nel model della tabella SENZA la foreign key diamo hasMany
    public function projects(){
        return $this->hasMany(Project::class);
    }
}
