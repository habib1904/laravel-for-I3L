<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;	
use App\Students;
use App\Parents;

class parentscontroller extends Controller
{
    public function create()
    {
    	$a = 1;
    	$parents = Parents::all();
    	return view('parents', compact('a', 'parents'));
    }

    public function input()
    {
    	$students = Students::all();

    	return view('inputparents', compact('students'));
    }

    public function store(Request $request)
    {
    	$parents = new Parents;
    	$parents->name_parents = $request->name_parents;
    	$parents->email = $request->email;
    	$parents->id_students = $request->students;
    	$parents->save();

    	return redirect('/parents');
    }

    public function edit($id)
    {
    	$edit = Parents::find($id);
    	$students = Students::all();
    	return view('editparents', compact('edit', 'students'));
    }

    public function update(Request $request, $id)
    {
    	$parents = Parents::find($id);
    	$parents->name_parents = $request->name_parents;
    	$parents->email = $request->email;
    	$parents->id_students = $request->students;
    	$parents->save();

    	return redirect('/parents');
    }

    public function destroy($id)
    {
    	$parents = Parents::find($id);
    	$parents->delete();

    	return redirect('/parents');
    }

}