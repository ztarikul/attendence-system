<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'emp_ref_id',
        'image',
    ];

    public function guest(){
        return $this->hasMany(Guest::class);
    }
}
