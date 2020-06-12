<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photographer extends Model
{
    protected $hidden = [
        'id', 
        'created_at', 
        'updated_at'
    ];
    
    public function album ()
    {
        return $this->hasMany("App\Photo");
    }
}
