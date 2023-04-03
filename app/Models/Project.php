<?php

namespace App\Models;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';
    
    public function user()
    {
        return $this->belongsTo(User::class);
        
    }

    protected $fillable = [
        'project_name',
        'img',
        'content',
        'tag',
        'company',
        'user_id',
    ];
}
