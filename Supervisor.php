<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    use HasFactory;

    protected $table = 'supervisors';
    protected $primaryKey = 'supervisor_email';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'supervisor_email',
        'supervisor_first_name',
        'supervisor_last_name',
        'supervisor_phone_number',
        'project_code',
    ];
}
