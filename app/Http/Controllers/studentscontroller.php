<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;	
use App\Students;
use App\Parents;

class studentscontroller extends Controller
{
    public function create()
    {
    	$a = 1;
        $hitung = Students::count();
    	$students = Students::all();
    	return view('students', compact('students', 'a', 'hitung'));
    }

    public function input()
    {
    	return view('inputstudents');
    }
    public function store(Request $request)
    {
    	$students = new Students;
    	$students->name_students = $request->name_students;
    	$students->email = $request->email;
    	$students->save();

    	return redirect('/students');

    }

    public function edit($id)
    {
    	$edit = Students::find($id);
    	
    	return view('/editstudents', compact('edit'));
    }

    public function update(Request $request, $id)
    {
    	$students = Students::find($id);
    	$students->name_students = $request->name_students;
    	$students->email = $request->email;
    	$students->save();

    	return redirect('/students');
    }

    public function destroy($id)
    {
    	$students = Students::find($id);
    	$students->delete();

    	return redirect('/students');
    }
}
