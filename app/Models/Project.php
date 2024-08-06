<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug' , 'client_name', 'summary', 'cover_image', 'type_id'];
    // relazione tra projects e types one to many, nel model della tabella con la foreign key diamo belongsTo
    public function type(){
        return $this->belongsTo(Type::class);
    }

    // relazione tra tabella projects e technologies (many to many con tabella ponte)

    public function technologies() {

        return $this->belongsToMany(Technology::class);
    }
}
