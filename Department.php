<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $table = 'departments';
    protected $primaryKey = 'department_code';
    public $incrementing = false;
    protected $fillable = ['department_code', 'department_name', 'student_reg_number'];
}
