<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'slug',
        'logo',
        'type',
        'motto',
        'description',
        'address_line1',
        'address_line2',
        'city',
        'state',
        'postal_code',
        'country',
        'phone',
        'email',
        'website',
        'principal_name',
        'established_year',
        'registration_no',
        'school_board',
        'timezone',
        'status',
    ];
}
