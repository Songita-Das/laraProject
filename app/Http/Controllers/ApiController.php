<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class ApiController extends Controller
{
    
       public function getEmployees(){
       $data= Employee::all();
       return response()->json([
           'status' => 'true',
           'data'=> $data
       ]);

    }

    public function addEmployee(Request $request){
       $obj = new Employee();
       $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->date_of_birth = $request->date_of_birth;
        $obj->salary = $request->salary;
         $obj->address = $request->address;
       
if($obj->save()){

    return response()->json([
        'status' => true,
        'message'=> 'successfully inserted'
    ]);
}
    }  
}
