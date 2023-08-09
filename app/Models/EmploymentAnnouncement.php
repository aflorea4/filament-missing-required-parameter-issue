<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EmploymentAnnouncement extends Pivot
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'date',
        'title',
        'file_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id', 'users');
    }
}
