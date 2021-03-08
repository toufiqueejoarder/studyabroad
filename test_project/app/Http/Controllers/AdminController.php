<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Universitie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $users=DB::table('users')->select('name','email','role','organization')->get();
        $disciplines=DB::table('disciplines')->get();
        $categories=DB::table('categories')->get();
        return view('Admin.index', compact('disciplines','categories', 'users'));
    }
    public function studentList(){
        $students=DB::table('users')->where('role','like',1)->get();
        return view('Admin.studentList', compact('students'));
    }
    public function universityList(){
        $university=DB::table('users')->where('role','like',2)->get();
        return view('Admin.universityList', compact('university'));
    }

    public function disciplineList(){
        $discipline=DB::table('disciplines')->get();
        return view('Admin.disciplineList', compact('discipline'));
    }
    public function deleteUni($id){
        $delete=DB::table('users')->where('id',$id)->delete();
        return redirect()->back() ->with('alert', 'Product deleted Successfully!');
    }
    public function viewUni($id){
        $user=User::where('id','=', $id)->select('email','organization')->first();
        $uni=Universitie::where('email','=', $user->email)->first();
        $program=Program::where('email','=', $user->email)->get();
        $x=count($program);
        return view('Admin.ViewUni', compact('uni', 'user', 'program', 'x'));
    }
}
