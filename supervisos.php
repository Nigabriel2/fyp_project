<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisos extends Model
{
    use HasFactory;

    protected $table = 'supervisos';
    protected $primaryKey = 'id';
    public $incrementing = true; // Ensures the primary key auto-increments
    protected $keyType = 'int'; // Ensures it's an integer

    protected $fillable = [
        'student_reg_number',
        'supervisor_email',
        'department_code',
        'faculty_code',
        'Campus_id',
    ];
}
