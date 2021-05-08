<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisciplineController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'disciplineName' => 'required',
        ]);

        $discipline=new Discipline();
        $discipline->discipline=$request->input('disciplineName');
        $discipline->save();

        return redirect()->back() ->with('alert', 'Discipline Added Successfully!');
    }
    public function storeFaculty(Request $request){
        $data=array();
        $data['departments']=$request->facultyName;
        $data['disciplines']=$request->discipline;

        $insert=DB::table('departments')->where('departments',$request->facultyName)->first();
        if($insert){
            return redirect('/admin');
        }
        else{
            $new=DB::table('departments')->insert($data);
            return redirect('/admin');
        }
        dd($insert);
    }
}
