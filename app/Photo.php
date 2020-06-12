<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $hidden = [
        'photographer_id',
        'created_at', 
        'updated_at'
    ];
    
    protected $casts = [
        'featured' => 'boolean',
    ];
    
    public function photographer ()
    {
        return $this->belongsTo("App\Photographer");
    }
}
