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
        $category=DB::table('categories')->get();
        $disciplines=DB::table('disciplines')->get();
        return view('University.index', compact('disciplines', 'category'));
    }

    public function profile($id){
        $user=User::where('id','=', $id)->select('email')->first();
        $uni=Universitie::where('email','=', $user->email)->first();
        if(!$uni){
            $data=array();
            $data['email']=$user->email;
            $products=DB::table('universities')->insert($data);
        }
        $profile=Universitie::where('email','=', $user->email)->first();
        return view('University.profile', compact('profile'));


    }

    public function updateProfile(Request $request ,$id){
        $data=array();
        $data['email']=$request->email;
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
        $profile=DB::table('universities')->where('id',$id)->update($data);
        return redirect('/university');
    }

    public function storeProgram(Request $request){
        $data=array();
        $data['email']=$request->email;
        $data['program']=$request->program;
        $data['course']=$request->course;
        $data['discipline']=$request->discipline;
        $data['study_status']=$request->status;
        $data['delivery']=$request->delivery;
        $data['duration']=$request->duration;
        $data['about']=$request->about;
        $data['fees']=$request->fees;
        $data['apply_start']=$request->apply_start;
        $data['apply_end']=$request->apply_end;
        $data['language']=$request->language;
        $data['Overview']=$request->overview;
        $data['program_structure']=$request->program_structure;
        $data['academic_requirement']=$request->academic_requirement;
        $data['english_requirement']=$request->english_requirement;
        $data['other_requirement']=$request->other_requirement;
        $data['funding']=$request->funding;
        $data['visa']=$request->visa;
        $data['work_permit']=$request->work_permit;
        $product=DB::table('programs')->insert($data);
        return redirect()->back() ->with('alert', 'Product Added Successfully!');
        //return response()->json($data);
    }

    public function programPosts($id){
        $user=User::where('id','=', $id)->select('email')->first();
        $posts=Program::where('email','=', $user->email)->get();
        return view('University.programPost', compact('posts'));
    }

    public function editPost($id){
        $user=Auth::user()->email;
        $post=Program::where('id','=', $id)->where('email','=',$user)->first();
        $category=DB::table('categories')->get();
        $disciplines=DB::table('disciplines')->get();
        return view('University.editPost', compact('post', 'category', 'disciplines'));
    }

    public function updateProgram(Request $request, $id){
        $data=array();
        $data['email']=$request->email;
        $data['program']=$request->program;
        $data['course']=$request->course;
        $data['discipline']=$request->discipline;
        $data['study_status']=$request->status;
        $data['delivery']=$request->delivery;
        $data['duration']=$request->duration;
        $data['about']=$request->about;
        $data['fees']=$request->fees;
        $data['apply_start']=$request->apply_start;
        $data['apply_end']=$request->apply_end;
        $data['language']=$request->language;
        $data['Overview']=$request->overview;
        $data['program_structure']=$request->program_structure;
        $data['academic_requirement']=$request->academic_requirement;
        $data['english_requirement']=$request->english_requirement;
        $data['other_requirement']=$request->other_requirement;
        $data['funding']=$request->funding;
        $data['visa']=$request->visa;
        $data['work_permit']=$request->work_permit;
        $product=DB::table('programs')->where('id', $id)->update($data);
        return redirect('/university');
    }

    public function deletePost($id){
        $user=Auth::user()->email;
        $delete=DB::table('programs')->where('id',$id)->where('email','=',$user)->delete();
        return redirect()->back() ->with('alert', 'Product deleted Successfully!');

    }

    public function listDiscipline(){
        $list=DB::table('disciplines')->get();
        return view('University.disciplineList', compact('list'));
    }
}
