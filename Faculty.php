<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'faculties';
    protected $primaryKey = 'faculty_code';
    public $incrementing = false;
    protected $fillable = ['faculty_code', 'faculty_name', 'department_code'];
    
    // If you have a Student model and a student has many projects
    public function student()
    {
        return $this->belongsTo(Student::class, 'student_reg_number', 'student_reg_number');
    }

    public function department()
{
    
    return $this->belongsTo(Department::class, 'department_code', 'department_code');

}
}
