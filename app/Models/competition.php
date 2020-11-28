<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class competition extends Model
{
    use HasFactory;
    
    protected $guarded=[];

    public function pivot()
    {
        return $this->hasMany(RegisteredUser::class);
    }
    public function official()
    {
        return $this->belongsTo(User::class, 'co_id');
    }
}
