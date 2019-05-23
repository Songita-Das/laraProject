<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\User;
use DB;

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

     public function login(){
        return view('login');
    }

    public function postlogin(Request $request)
    {
   $email = $request->email;
   $password = $request->password;
   $user = User::where('email', '=' ,$email)
             ->where('password', '=' ,$password)
            ->first();
   if($user){
    $request->session()->put('username',$user->name);
    $request->session()->put('useremail',$user->email);
    $request->session()->put('userrole',$user->role);

    return redirect()->route('dashboard');
}
    }

    public function dashboard(){
        return view('dashboard');
    }
    public function test(){
        $data = DB::table('hire_books as hb')
            ->Join('users','hb.student_id','users.id')
            ->Join('books','hb.book_id','books.id')
            ->select('users.name as username','books.name as bookname','hb.hire_date')
            ->get();
        dd($data);
    }
}

