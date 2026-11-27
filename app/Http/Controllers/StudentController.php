<?php
namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    // Step 9 and 10: Display all students
    public function index()
    {
        $students = Student::all();

        return view("student.index", compact("students"));
    }

    // Step 9: Display create form
    public function create()
    {
        return view("student.create");
    }

    // Step 13: Store new student
    public function store(Request $request)
    {
        $validation = $request->validate([
            "name" => "required|max:100",
            "email" => "required|max:256|email",
            "phone" => "nullable|max:20",
            "address" => "nullable",
            "date_of_birth" => "required|date"
        ]);

        Student::create($validation);

        return redirect()->route("students.index")
            ->with("success", "Student created successfully");
    }

    // Display individual student
    public function show(Student $student)
    {
        return view("student.show", compact("student"));
    }

    // Step 14: Display edit form
    public function edit(Student $student)
    {
        return view("student.edit", compact("student"));
    }

    // Step 16: Update student
    public function update(Request $request, Student $student)
    {
        $validation = $request->validate([
            "name" => "required|max:100",
            "email" => "required|max:256|email",
            "phone" => "nullable|max:20",
            "address" => "nullable",
            "date_of_birth" => "required|date"
        ]);

        $student->update($validation);

        return redirect()
            ->route("students.index")
            ->with("success", "Student Edited Successfully");
    }

    // Delete student
    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route("students.index")
            ->with("success", "Student deleted successfully");
    }
}
