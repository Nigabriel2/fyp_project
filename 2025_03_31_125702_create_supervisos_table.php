<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupervisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supervisos', function (Blueprint $table) {
            $table->id(); // Primary key (auto-increment)
            $table->string('student_reg_number'); // Reference to students table
            $table->string('supervisor_email'); // Reference to supervisors table
            $table->string('department_code'); // Reference to departments table
            $table->string('faculty_code'); // Reference to faculties table
            $table->unsignedBigInteger('campus_id'); // Foreign key column for campus_id
            $table->timestamps(); // Timestamps for created_at and updated_at

            // Add foreign keys
            $table->foreign('student_reg_number')->references('student_reg_number')->on('students')->onDelete('cascade');
            $table->foreign('supervisor_email')->references('supervisor_email')->on('supervisors')->onDelete('cascade');
            $table->foreign('department_code')->references('department_code')->on('departments')->onDelete('cascade');
            $table->foreign('faculty_code')->references('faculty_code')->on('faculties')->onDelete('cascade');
            $table->foreign('campus_id')->references('campus_id')->on('campuses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supervisos');
    }
}
