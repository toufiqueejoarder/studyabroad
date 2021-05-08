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
        $faculty=DB::table('departments')->get();
        return view('Admin.index', compact('disciplines','categories', 'users','faculty'));
    }
    public function studentList(){
        $students=DB::table('users')->where('role','like',1)->get();
        //dd($students);
        return view('Admin.studentList', compact('students'));
    }
    public function universityList(){
        $university=DB::table('users')->where('role','like',2)->get();
        return view('Admin.universityList', compact('university'));
    }

    public function disciplineList(){
        $discipline=DB::table('disciplines')->get();
        $faculty=DB::table('departments')->get();
        return view('Admin.disciplineList', compact('discipline','faculty'));
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

    public function manageCountry(){
        $country=DB::table('countries')->get();
        return view('Admin.ManageCountry', compact('country'));
    }

    public function storeCountry(Request $request){
        $data= array();
        $data['country']=$request->country;
        $product=DB::table('countries')->insert($data);
        return redirect('/manage-country');
    }

    public function storeRanking(Request $request){
            $data= array();
            $data['university']=$request->nmuni;
            $data['year']=$request->year;
            $data['country']=$request->country;
            $data['timesrnk']=$request->timesrank;
            $data['shanghairank']=$request->shanghairank;
            $data['topuni']=$request->topuni;
            $data['usrank']=$request->usrank;
            $rankuni=DB::table('ranks')->insert($data);
            return redirect('/Ranked-University');
    }

    public function RankedUni(){
        $ranks=DB::table('ranks')->get();
        $country=DB::table('countries')->get();
        return view('Admin.RankedUniversity', compact('ranks', 'country'));
    }

    public function editranking($id){
        $uni=DB::table('ranks')->where('id', $id)->first();
        $country=DB::table('countries')->get();
        //dd($uni);
        return view('Admin.EditRanking',compact('uni','country'));
    }

    public function updateRanking(Request $request){
        $id=$request->id;
        $data= array();
        $data['university']=$request->nmuni;
        $data['year']=$request->year;
        $data['country']=$request->country;
        $data['timesrnk']=$request->timesrank;
        $data['shanghairank']=$request->shanghairank;
        $data['topuni']=$request->topuni;
        $data['usrank']=$request->usrank;
        $rankuni=DB::table('ranks')->where('id', $id)->update($data);
        return redirect('/Ranked-University');
    }
    public function deleteRanking($id){
        $delete=DB::table('ranks')->where('id',$id)->delete();
        return redirect()->back() ->with('alert', 'Product deleted Successfully!');
    }

    public function storeStudy(Request $request){
        $data= array();
        $data['country']=$request->country;
        $data['notes']=$request->notes;
        $data['whystudy']=$request->wysh;
        $data['wtliketo']=$request->LtSH;
        $data['wttostudy']=$request->wtSH;
        $data['mjcity']=$request->MajorCities;
        $data['wcuniat']=$request->UniToAttend;
        $data['pracinfo']=$request->pracInfo;
        $data['waytqlfy']=$request->waytoqualify;
        $study=DB::table('studies')->insert($data);
        return redirect('/manage-country');
    }
    public function storeLiving(Request $request){
        $data= array();
        $data['country']=$request->country;
        $data['notes']=$request->notes;
        $data['tutnfees']=$request->TFH;
        $data['lvngcst']=$request->LivingCost;
        $living=DB::table('livings')->insert($data);
        return redirect('/manage-country');
    }
    public function storeAbout(Request $request){
        $data= array();
        $data['country']=$request->country;
        $data['notes']=$request->notes;
        $data['others']=$request->others;
        $about=DB::table('abouts')->insert($data);
        return redirect('/manage-country');
    }
    public function storeVisa(Request $request){
        $data= array();
        $data['country']=$request->country;
        $data['notes']=$request->notes;
        $data['procedures']=$request->visap;
        $visa=DB::table('stdvisas')->insert($data);
        return redirect('/manage-country');
    }
    public function storeWP(Request $request){
        $data= array();
        $data['country']=$request->country;
        $data['notes']=$request->notes;
        $data['wrkprmts']=$request->workpt;
        $workPermit=DB::table('workpermits')->insert($data);
        return redirect('/manage-country');
    }
    public function storeHTA(Request $request){
        $data= array();
        $data['country']=$request->country;
        $data['notes']=$request->notes;
        $data['documents']=$request->dnta;
        $data['englishskill']=$request->espi;
        $data['deadlines']=$request->appdl;
        $apply=DB::table('htapplys')->insert($data);
        return redirect('/manage-country');
    }
    public function storeUniD(Request $request){
        $data= array();
        $data['country']=$request->country;
        $data['acyr']=$request->AcYrS;
        $data['rnkduni']=$request->nruh;
        $data['intstd']=$request->noist;
        $data['totstd']=$request->notstd;
        $data['population']=$request->nopop;
        $uniData=DB::table('cunis')->insert($data);
        return redirect('/manage-country');
    }

    public function ViewStudent($id){
        $std=DB::table('users')->where('id',$id)->first();
        $student=DB::table('students')->where('email',$std->email)->first();
        if ($student) {
            return view('Admin.StudentView', compact('student', 'std'));
        }
        else{
            return redirect()->back()->with('error', 'Error!');
        }
    }

    public function DeleteStudent($id){
        $student=DB::table('users')->where('id',$id)->select('id','email','name')->first();
        $delete=DB::table('users')->where('id',$id)->delete();
        return redirect('/students-list');
    }
}
