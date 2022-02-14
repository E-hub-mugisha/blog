<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    /**
     * the attributes that are mass assignable.
     * 
     * @var array
     */

    public $fillable = [
        'names', 'email', 'phone', 'subject', 'message'
    ];
}
