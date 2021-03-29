<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'id',
        'user_id',
        'title',
        'content',
        'data',
        'from',
        'to'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

