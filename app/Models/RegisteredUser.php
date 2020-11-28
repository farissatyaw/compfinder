<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredUser extends Model
{
    use HasFactory;

    protected $guarded=[];

    public function competition()
    {
        return $this->belongsTo(competition::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
