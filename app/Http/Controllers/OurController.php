<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class OurController extends Controller
{
    public function add(){
        return view('add');
    }

    public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $date_of_birth = $request->date_of_birth;
        $residance = $request->residance;

        $obj = new Student();
        $obj->name = $name;
        $obj->email = $email;
        $obj->date_of_birth = $date_of_birth;
        $obj->residance = $residance;

        if($obj->save()){
            echo 'Successfully Inserted';
        }
    }

    public function list(){
        $data = Student::all(); 

        return view('list',['students'=>$data]);
    }

    public function edit($id){
        $obj = Student::find($id); 
        return view('edit',['student'=>$obj]);
    }

    public function update(Request $request, $id){
        $obj = Student::find($id);
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->date_of_birth = $request->date_of_birth;
        $obj->residance = $request->residance;

        if($obj->save()){
            return redirect('/list');
        }
    }
}

