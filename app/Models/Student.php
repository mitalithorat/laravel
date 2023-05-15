<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['firstname', 'lastname', 'email', 'hobbies', 'gender', 'contact', 'birthday', 'subject', 'address'];
    public function sethobbiesAttribute($value)
    {
        $this->attributes['hobbies'] = implode(',', (array)$value);
    }
}
