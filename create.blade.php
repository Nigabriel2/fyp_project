<!DOCTYPE html>
<html lang="en">
<head>
    <title>Submit Project Proposal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<h2>Submit Your Project Proposal</h2>

<form action="{{ route('projects.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="project_code" class="form-label">Project Code</label>
        <input type="text" class="form-control" id="project_code" name="project_code" required>
    </div>

    <div class="mb-3">
        <label for="project_name" class="form-label">Project Name</label>
        <input type="text" class="form-control" id="project_name" name="project_name" required>
    </div>

    <div class="mb-3">
        <label for="project_problems" class="form-label">Project Problems</label>
        <textarea class="form-control" id="project_problems" name="project_problems" required></textarea>
    </div>

    <div class="mb-3">
        <label for="project_solutions" class="form-label">Project Solutions</label>
        <textarea class="form-control" id="project_solutions" name="project_solutions" required></textarea>
    </div>

    <div class="mb-3">
        <label for="project_abstract" class="form-label">Project Abstract</label>
        <textarea class="form-control" id="project_abstract" name="project_abstract" required></textarea>
    </div>

    <div class="mb-3">
        <label for="project_dissertation" class="form-label">Project Dissertation</label>
        <textarea class="form-control" id="project_dissertation" name="project_dissertation" required></textarea>
    </div>

    <div class="mb-3">
        <label for="project_source_codes" class="form-label">Project Source Codes (GitHub/Drive link)</label>
        <input type="text" class="form-control" id="project_source_codes" name="project_source_codes" required>
    </div>

    <div class="mb-3">
        <label for="department_code" class="form-label">Department</label>
        <select class="form-control" id="department_code" name="department_code" required>
            <option value="">Select Department</option>
            @foreach($departments as $department)
                <option value="{{ $department->department_code }}">{{ $department->department_name }}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
    <label for="student_reg_number" class="form-label">Student Registration Number</label>
    <select class="form-control" id="student_reg_number" name="student_reg_number" required>
        <option value="">Select Student Registration Number</option>
        @foreach($students as $student)
            <option value="{{ $student->student_reg_number }}">{{ $student->student_reg_number }}</option>
        @endforeach
    </select>
</div>

  


    <button type="submit" class="btn btn-primary">Submit Proposal</button>
</form>

</body>
</html>
