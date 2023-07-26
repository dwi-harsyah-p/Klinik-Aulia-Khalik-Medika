<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loginlog extends Model
{
    use HasFactory;
    protected $table = 'login_logs';
    protected $primaryKey = 'id';
    // public $timestamps = false;

    protected $fillable = [
        'user_id',
        'email',
        'login_time',
        'ip_address',
        'device_info',
        'status',
        'description',
    ];

    protected $casts = [
        'device_info' => 'array',
    ];

    // Relationship to User model (if you want to associate login logs with users)
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }    
}
