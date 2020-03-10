<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.showStudent',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.formStudent');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::all();
        $student = new Student;
        $student->firstname = $request->get('firstname');
        $student->lastname = $request->get('lastname');
        $student->class = $request->get('class');
        $student->year = $request->get('year');
        $student->gender = $request->get('gender');
        $student->province = $request->get('province');
        $student->status = $request->get('status');
        $student->picture = $request->get('picture');
        $student->user_id = $user->id;
        $student->save();
        return view('students.showStudent');
    }

    /**
     * Display the all resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit( $id )
    {
        $students = Student::find($id);
        return view('students.formEditStudent',compact('students'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::all();
        $students = Student::find($id);
        $students->firstname = $request->get('firstname');
        $students->lastname = $request->get('lastname');
        $students->class = $request->get('class');
        $students->year = $request->get('year');
        $students->gender = $request->get('gender');
        $students->province = $request->get('province');
        $students->status = $request->get('status');
        $students->picture = $request->get('picture');
        $students->user_id = $user->id;
        $students->save();
        return redirect('showstudent');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
    public function backForm(){
        return redirect('showstudent');
    }
}
