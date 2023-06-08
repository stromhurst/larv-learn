<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name'.'user_id'];

    // public static function boot()
    // {
    //     parent::boot();

    //     self::creating(function ($task) {
    //         $task->author = auth()->user()->id;
    //     });
    // }

    public function user_id()
    {
        return $this->belongsTo(User::class, 'id');
    }
    
}
