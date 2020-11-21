<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competition extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function users()
    {
        return $this->belongsToMany(User::class, 'registeredusers');
    }
    public function official()
    {
        return $this->belongsTo(User::class, 'CO_id');
    }
}
