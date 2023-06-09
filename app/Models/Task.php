<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Task extends Model
{
    use HasFactory;
    protected $fillable = ['name','author'];

    public static function boot()
    {
        parent::boot();

        self::creating(function ($task) {
            $task->author = auth()->user()->id;
        });
    }
    
    public function getAuthorName($id){
        return User::find($id)->name;
    }
}
