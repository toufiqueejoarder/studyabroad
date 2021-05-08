<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\Universitie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UniversityController extends Controller
{
    public function index(){
        $auth=Auth::user()->email;
        $category=DB::table('categories')->get();
        $disciplines=DB::table('disciplines')->get();
        $faculty=DB::table('departments')->get();
        $user=User::where('email',$auth)->select('email','organization')->first();

        $uni=Universitie::where('email','=', $auth)->first();
        if(!$uni){
            $data=array();
            $data['email']=$user->email;
            $data['organization']=$user->organization;
            $products=DB::table('universities')->insert($data);
        }
        $university=DB::table('universities')->where('email',$auth)->first();
        //dd($university);
        return view('University.index', compact('disciplines', 'category','faculty','university'));
    }

    public function profile($id){
        $user=User::where('id','=', $id)->select('email','organization')->first();
        $uni=Universitie::where('email','=', $user->email)->first();
        if(!$uni){
            $data=array();
            $data['email']=$user->email;
            $data['organization']=$user->organization;
            $products=DB::table('universities')->insert($data);
        }
        $profile=Universitie::where('email','=', $user->email)->first();
        $university=Universitie::where('email','=', $user->email)->first();
        return view('University.profile', compact('profile','university'));


    }

    public function updateProfile(Request $request ,$id){
        $data=array();
        $data['email']=$request->email;
        $data['organization']=$request->organization;
        $data['tagline']=$request->tagline;
        $data['address']=$request->address;
        $data['address2']=$request->address2;
        $data['state']=$request->state;
        $data['provience']=$request->provience;
        $data['country']=$request->country;
        $data['website']=$request->website;
        $image1=$request->file('uLogo');
        $old_link=$request->old_photo;
        if($image1) {
            $image1_name = Str::random(5);
            $ext1=strtolower($image1->getClientOriginalExtension());
            $image1_full_name= $image1_name.'.'.$ext1;
            $upload_path='images/';
            $image1_url=$upload_path.$image1_full_name;
            $image1->move($upload_path,$image1_full_name);
            $data['university_logo']=$image1_url;
            if($old_link) {
                unlink($request->old_photo);
            }
        }
        else{
            $data['university_logo'] = $request->old_photo;
        }
        $data['ReasonToStdyH']=$request->ReasonToStudyH;
        $data['history']=$request->history;
        $data['education']=$request->education;
        $data['research']=$request->research;
        $data['career']=$request->career;
        $data['StService']=$request->StService;
        $data['HousingService']=$request->HousingService;
        $data['LibraryService']=$request->LibraryService;
        $data['CampusLife']=$request->CampusLife;
        $data['SportsFacilities']=$request->SportsFacilities;
        $data['StudentClub']=$request->StudentClub;
        $profile=DB::table('universities')->where('id',$id)->update($data);
        return redirect('/university');
    }

    public function storeProgram(Request $request){
        $data= array();
        $data['email']=$request->email;
        $data['program']=$request->program;
        $data['course']=$request->course;
        $data['discipline']=$request->discipline;
        $data['faculty']=$request->faculty;
        $data['study_status']=$request->status;
        $data['delivery']=$request->delivery;
        $data['duration']=$request->duration;
        $data['about']=$request->about;
        $data['fees']=$request->fees;
        $data['apply_startS1']=$request->apply_startS1;
        $data['apply_endS1']=$request->apply_endS1;
        $data['apply_startS2']=$request->apply_startS2;
        $data['apply_endS2']=$request->apply_endS2;
        $data['language']=$request->language;
        $data['Overview']=$request->overview;
        $data['credit']=$request->credit;
        $data['program_structure']=$request->program_structure;
        $data['academic_requirement']=$request->academic_requirement;
        $data['english_requirement']=$request->english_requirement;
        $data['other_requirement']=$request->other_requirement;
        $data['funding']=$request->funding;
        $data['visa']=$request->visa;
        $data['work_permit']=$request->work_permit;
        $data['course_link']=$request->course_link;
        $product=DB::table('programs')->insert($data);
        return redirect('/university');
        //return response()->json($data);
    }

    public function programPosts($id){
        $user=User::where('id','=', $id)->select('email')->first();
        $posts=Program::where('email','=', $user->email)->get();
        $university=DB::table('universities')->where('email',$user->email)->first();
        return view('University.programPost', compact('posts','university'));
    }

    public function editPost($id){
        $user=Auth::user()->email;
        $post=Program::where('id','=', $id)->where('email','=',$user)->first();
        $category=DB::table('categories')->get();
        $disciplines=DB::table('disciplines')->get();
        $faculty=DB::table('departments')->get();
        $university=DB::table('universities')->where('email',$user)->first();
        return view('University.editPost', compact('post', 'category', 'disciplines','faculty','university'));
    }

    public function updateProgram(Request $request, $id){
        $data=array();
        $data['email']=$request->email;
        $data['program']=$request->program;
        $data['course']=$request->course;
        $data['discipline']=$request->discipline;
        $data['faculty']=$request->faculty;
        $data['study_status']=$request->status;
        $data['delivery']=$request->delivery;
        $data['duration']=$request->duration;
        $data['about']=$request->about;
        $data['fees']=$request->fees;
        $data['apply_startS1']=$request->apply_startS1;
        $data['apply_endS1']=$request->apply_endS1;
        $data['apply_startS2']=$request->apply_startS2;
        $data['apply_endS2']=$request->apply_endS2;
        $data['language']=$request->language;
        $data['Overview']=$request->overview;
        $data['credit']=$request->credit;
        $data['program_structure']=$request->program_structure;
        $data['academic_requirement']=$request->academic_requirement;
        $data['english_requirement']=$request->english_requirement;
        $data['other_requirement']=$request->other_requirement;
        $data['funding']=$request->funding;
        $data['visa']=$request->visa;
        $data['work_permit']=$request->work_permit;
        $data['course_link']=$request->course_link;
        //dd($data);
        $product=DB::table('programs')->where('id', $id)->update($data);
        return redirect('/university');
    }

    public function deletePost($id){
        $user=Auth::user()->email;
        $delete=DB::table('programs')->where('id',$id)->where('email','=',$user)->delete();
        return redirect('/university');

    }

    public function listDiscipline(){
        $user=Auth::user()->email;
        $university=DB::table('universities')->where('email',$user)->first();
        $list=DB::table('disciplines')->get();
        return view('University.disciplineList', compact('list','university'));
    }
    public function viewApplications(){
        $user=Auth::user()->email;
        $list=DB::table('wlists')->where('university_email',$user)
            ->where('status', 'like', '%'.'Applied'.'%')
            ->rightJoin('students', 'wlists.student','=','students.email' )
            ->leftJoin('programs', 'wlists.program_id', '=', 'programs.id')
            ->select('wlists.id','wlists.student','wlists.program_id','students.name','students.phone','students.mailingAddress','students.Masters','students.MOrganization','students.MCGPA','students.Bachelor','students.BOrganization','students.BachelorCGPA','students.ielts','students.gre','programs.program','programs.course','programs.faculty')
            ->get();
        $accepted=DB::table('applications')->where('uni_email',$user)
            ->get();
        $faculty=DB::table('programs')->where('email',$user)->select('faculty')->distinct()->get();
        $university=DB::table('universities')->where('email',$user)->first();
        //dd($list);
        return view('University.Applications',compact('list','faculty','university','accepted'));
    }

    public function viewApplicant($student, $id){
        $user=Auth::user()->email;
        $apply=DB::table('wlists')->where('university_email',$user)->where('student',$student)->where('program_id',$id)->first();
        $list=DB::table('wlists')->where('university_email',$user)->where('student',$student)->where('program_id',$id)
            ->rightJoin('students', 'wlists.student','=','students.email' )
            ->leftJoin('programs', 'wlists.program_id', '=', 'programs.id')
            ->select('wlists.id','wlists.student','wlists.program_id','wlists.university_email','wlists.university_name','students.name','students.p_image','students.phone','students.mailingAddress','students.Masters','students.MOrganization','students.Mdepartment','students.MpassYear','students.MCGPA','students.Bachelor','students.BOrganization','students.BDepartment','students.BpassYear','students.BachelorCGPA','students.HSC','students.HSCOrg','students.HSCGroup','students.HSCPass','students.HSCresult','students.SSC','students.SSCOrg','students.SSCGroup','students.SSCPass','students.SSCResult','students.ielts','students.gre','programs.program','programs.course','programs.academic_requirement','programs.english_requirement','programs.other_requirement')
            ->first();
        $university=DB::table('universities')->where('email',$user)->first();
        //dd($list);
        return view('University.Applicant',compact('list','university'));
    }

    public function acceptApplication(Request $request){
        $data=array();
        $data['student_email']=$request->student_email;
        $data['wishL_id']=$request->Wid;
        $data['programs_id']=$request->programs_id;
        $data['uni_email']=$request->uni_email;
        $data['uni_name']=$request->uni_name;
        $data['status']=$request->status;

        $check=DB::table('applications')->where('student_email',$request->student_email)->where('programs_id',$request->programs_id)
            ->where('uni_email',$request->uni_email)->first();
        //dd($data);
        if($check){
            return redirect()->back();
        }
        else{
            $post=DB::table('applications')->insert($data);
            return redirect('/applications');
        }
    }

    public function AcceptedApplications(){
        $user=Auth::user()->email;
        $list=DB::table('applications')->where('uni_email',$user)
            ->leftJoin('programs','applications.programs_id','=', 'programs.id')
            ->rightJoin('students', 'applications.student_email','=','students.email' )
            ->orderBy('applications.id','DESC')
            ->get();
        $faculty=DB::table('programs')->where('email',$user)->select('faculty')->distinct()->get();
        $university=DB::table('universities')->where('email',$user)->first();
        //dd($list);
        return view('University.AcceptedApplications', compact('faculty','list','university'));
    }

    public function scholarships(){
        $user=Auth::user()->email;
        $scholarships=DB::table('scholarships')->where('email',$user)->get();
        $university=DB::table('universities')->where('email',$user)->first();
        return view('University.Scholarships',compact('scholarships','university'));
    }

    public function StoreScholarships(Request $request){
        $user=Auth::user()->email;
        $username=Auth::user()->organization;
        $data=array();
        $data['email']=$user;
        $data['name']=$username;
        $data['title']=$request->title;
        $data['amount']=$request->amount;
        $data['description']=$request->description;
        $data['eligibility']=$request->eligibility;
        $data['applyStart']=$request->applyStart;
        $data['applyEnd']=$request->applyEnd;

        //dd($data);
        $entry=DB::table('scholarships')->insert($data);
        return redirect('/scholarships');
    }

    public function DeleteScholarships($id){
        $user=Auth::user()->email;
        $delete=DB::table('scholarships')->where('id',$id)->where('email',$user)->delete();
        return redirect('/scholarships');
    }
}
