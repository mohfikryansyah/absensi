<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devisi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'devisi_id');
    }

    public function ketua()
    {
        return $this->belongsTo(User::class, 'ketua');
    }

    public function attendances()
    {
        return $this->hasManyThrough(Attendance::class, Employee::class, 'devisi_id', 'user_id', 'id', 'user_id');
    }
}
