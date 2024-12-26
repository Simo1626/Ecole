<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    public function create()
    {
        return view('students.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthday' => 'required',
            'grade_level' => 'nullable',
            'phone_number' => 'nullable',
            'email' => 'nullable|email',
            'registration_date' => 'nullable',
            'responsible_name' => 'nullable',
            'responsible_contact' => 'nullable',
            'picture' => 'nullable|image',
        ]);

        Student::create($request->all());

        return redirect()->route('students.index')->with('success', 'Student created successfully.');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birthday' => 'required',
            'grade_level' => 'nullable',
            'phone_number' => 'nullable',
            'email' => 'nullable|email',
            'registration_date' => 'nullable',
            'responsible_name' => 'nullable',
            'responsible_contact' => 'nullable',
            'picture' => 'nullable|image',
        ]);

        $student->update($request->all());

        return redirect()->route('students.index')->with('success', 'Student updated successfully.');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully.');
    }
}