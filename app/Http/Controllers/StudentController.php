<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Redirect;

class StudentController extends Controller
{
    public function index(){
        $userid=Auth::user()->id;
        $user=User::where('id','=', $userid)->select('name','email','organization')->first();
        $studentp=Student::where('email','=', $user->email)->first();
        if(!$studentp){
            $data=array();
            $data['email']=$user->email;
            $data['name']=$user->name;
            $products=DB::table('students')->insert($data);
        }
        $student=Student::where('email','=', $user->email)->select('p_image')->first();
            //dd($student);
            return view('Student.index', compact('student'));

    }
    public function editProfile($id){
        $userid=Auth::user()->id;
        $user=User::where('id','=', $userid)->select('name','email','organization')->first();
        $student=Student::where('email','=', $user->email)->first();
        if(!$student){
            $data=array();
            $data['email']=$user->email;
            $data['name']=$user->name;
            $products=DB::table('students')->insert($data);
        }
        $profile=Student::where('email','=', $user->email)->first();
        //dd($profile);
        return view('Student.EditProfile', compact('profile','student'));
    }
    public function updateProfile(Request $request){
        $user=Auth::user()->email;
        $profile=Student::where('email','=', $user)->select('id','email','name')->first();
        $data=array();
        $data['email']=$profile->email;
        $data['name']=$request->name;
        $image1=$request->file('pImage');
        $old_link=$request->old_image;
        if($image1) {
            $image1_name = Str::random(5);
            $ext1=strtolower($image1->getClientOriginalExtension());
            $image1_full_name= $image1_name.'.'.$ext1;
            $upload_path='images/';
            $image1_url=$upload_path.$image1_full_name;
            $image1->move($upload_path,$image1_full_name);
            $data['p_image']=$image1_url;
            if($old_link) {
                unlink($request->old_image);
            }
        }
        else{
            $data['p_image'] = $request->old_image;
        }
        $data['phone']=$request->phone;
        $data['mailingAddress']=$request->mailingAddress;
        $data['Masters']=$request->Masters;
        $data['MOrganization']=$request->MOrganization;
        $data['Mdepartment']=$request->Mdepartment;
        $data['MpassYear']=$request->MpassYear;
        $data['MCGPA']=$request->MCGPA;
        $data['Bachelor']=$request->Bachelor;
        $data['BOrganization']=$request->BOrganization;
        $data['BDepartment']=$request->BDepartment;
        $data['BpassYear']=$request->BpassYear;
        $data['BachelorCGPA']=$request->BachelorCGPA;
        $data['HSC']=$request->HSC;
        $data['HSCOrg']=$request->HSCOrg;
        $data['HSCGroup']=$request->MajorHSC;
        $data['HSCPass']=$request->HSCPass;
        $data['HSCresult']=$request->HSCresult;
        $data['SSC']=$request->SSC;
        $data['SSCOrg']=$request->SSCOrg;
        $data['SSCGroup']=$request->SSCGroup;
        $data['SSCPass']=$request->SSCPass;
        $data['SSCResult']=$request->SSCResult;

        $ielts=$request->file('IELTS');
        $old_link=$request->old_ielts;
        if($ielts) {
            $ielts_name = Str::random(5);
            $ext1=strtolower($ielts->getClientOriginalExtension());
            $ielts_full_name= $user.'.'.$ielts_name.'.'.$ext1;
            $upload_path='ielts/';
            $ielts_url=$upload_path.$ielts_full_name;
            $ielts->move($upload_path,$ielts_full_name);
            $data['ielts']=$ielts_url;
            if($old_link) {
                unlink($request->old_ielts);
            }
        }
        else{
            $data['ielts'] = $request->old_ielts;
        }
        $gre=$request->file('GRE');
        $old_link2=$request->old_gre;
        if($gre) {
            $gre_name = Str::random(5);
            $ext2=strtolower($gre->getClientOriginalExtension());
            $gre_full_name= $user.'.'.$gre_name.'.'.$ext2;
            $upload_path2='gre/';
            $gre_url=$upload_path2.$gre_full_name;
            $gre->move($upload_path2,$gre_full_name);
            $data['gre']=$gre_url;
            if($old_link2) {
                unlink($request->old_gre);
            }
        }
        else{
            $data['gre'] = $request->old_gre;
        }
        //dd($data);
        $upload=DB::table('students')->where('id',$profile->id)->update($data);
        return redirect('/student');
    }

    public function addWishList(Request $request, $id){
        $user=Auth::user()->email;
        $post=DB::table('programs')->where('id',$id)->first();
        $uni=DB::table('users')->where('email','like', $post->email)->select('name')->first();
        $data=array();
        $data['student']=$user;
        $data['program_id']=$post->id;
        $data['university_email']=$post->email;
        $data['university_name']=$uni->name;

        $previous=DB::table('wlists')->where('program_id',$id)->where('student',$user)->first();
        if($previous){

            return redirect()->back()->with('error', 'Error!');
        }

        else{
            $wish=DB::table('wlists')->insert($data);
            return redirect('/wish-List');
        }
    }
    public function viewWishList(){
        $user=Auth::user()->email;
        $wishes = DB::table('wlists')->where('student',$user)->where('status','like', '%'.'WishListed'.'%')
            ->leftJoin('programs', 'wlists.program_id', '=', 'programs.id')
            ->select('wlists.id','wlists.student','wlists.program_id','wlists.university_name','wlists.university_email','programs.course','programs.program','programs.discipline','programs.delivery','programs.duration','programs.fees','programs.about')
            ->get();
        //dd($wishes);
        $student=Student::where('email','=', $user)->first();
        return view('Student.WishList',compact('wishes','student'));
    }

    public function viewApplied(){
        $user=Auth::user()->email;
        $wishes = DB::table('wlists')->where('student',$user)->where('status','like', '%'.'Applied'.'%')
            ->leftJoin('programs', 'wlists.program_id', '=', 'programs.id')
            ->select('wlists.id','wlists.student','wlists.program_id','wlists.university_email','wlists.university_name','wlists.status','programs.email','programs.course','programs.program','programs.discipline','programs.faculty','programs.delivery','programs.duration','programs.study_status','programs.about','programs.fees')
            ->get();
        $accepted=DB::table('applications')->where('student_email','like', $user)->get();
        $student=Student::where('email','=', $user)->first();
        //dd($wishes);
        return view('Student.AppliedPrograms',compact('wishes','student','accepted'));
    }

    public function applyProgram(Request $request){
        $wish=DB::table('wlists')
            ->where('student','like',$request->student)->where('program_id','like',$request->program_id)
            ->first();
        $data=array();
        $data['student']=$request->student;
        $data['program_id']=$request->program_id;
        $data['university_email']=$request->university_email;
        $data['university_name']=$request->university_name;
        $data['status']=$request->status;
        $id=$wish->id;
        $upload=DB::table('wlists')->where('id',$id)->update($data);
        return redirect('/applied-program');
    }

    public function Notifications(){
        $user=Auth::user()->email;
        $accepted=DB::table('applications')->where('student_email',$user)
            ->leftJoin('programs','applications.programs_id','=', 'programs.id')
            ->orderBy('applications.id','DESC')
            ->get();
        //dd($accepted);
        $student=Student::where('email','=', $user)->first();
        return view('Student.Notifications',compact('accepted','student'));
    }

    public function DeleteWishedProgram($id){
        $user=Auth::user()->email;
        $wish=DB::table('wlists')
            ->where('id',$id)
            ->first();
        //dd($wish);
        if($user==$wish->student){
            $wishs=DB::table('wlists')
                ->where('id',$id)
                ->first();
            //dd($wishs);
            $delete=DB::table('wlists')->where('id',$id)->delete();
            return redirect('/wish-List');
        }
        else{
            return redirect('/wish-List');
        }
    }

}
