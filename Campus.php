<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $table = 'campuses';
    protected $primaryKey = 'Campus_id';
    public $incrementing = false;
    protected $fillable = ['Campus_id', 'Campus_name', 'faculty_code'];
}
