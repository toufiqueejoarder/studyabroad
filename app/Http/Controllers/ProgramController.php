<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramController extends Controller
{
    public function viewProgram($discipline){
        $program = DB::table('universities')
            ->rightJoin('programs', 'universities.email', '=', 'programs.email')
            ->where('discipline', 'LIKE', $discipline)
            ->orWhere('faculty','like', '%'.$discipline.'%')
            ->paginate('10');
        $programC = DB::table('universities')
            ->rightJoin('programs', 'universities.email', '=', 'programs.email')
            ->where('discipline', 'LIKE', $discipline)
            ->orWhere('faculty','like', '%'.$discipline.'%')
            ->get();
        $programBCost = DB::table('universities')
            ->rightJoin('programs', 'universities.email', '=', 'programs.email')
            ->where('discipline', 'LIKE', $discipline)
            ->orWhere('faculty','like', '%'.$discipline.'%')
            ->orderBy('programs.fees','ASC')
            ->paginate('10');
        $count=count($programC);
        $disciplines=DB::table('disciplines')->get();
        $disdata=DB::table('departments')->where('departments',$discipline)
            ->orWhere('disciplines',$discipline)->select('disciplines')->first();
        $faculty=DB::table('departments')->where('disciplines',$disdata->disciplines)->get();
        $nolink=0;
        //dd($faculty);
        return view('VisitByDiscipline', compact('program', 'discipline','programBCost','count','disciplines','faculty','disdata','nolink'));
    }

    public function programDetails($id){
        $programD=DB::table('programs')->where('id',$id)->first();
        $program = DB::table('universities')
            ->where('email','like', $programD->email)
            ->first();
        $details=$programD->program_structure;
        $array = explode('.', $details);
        //return response()->json($program);
        $others=DB::table('programs')->where('discipline',$programD->discipline)
            ->Join('universities','programs.email','=', 'universities.email')
            ->select('programs.*', 'universities.organization', 'universities.provience', 'universities.country')
            ->get();
        //dd($others);
        return view('studiesDetails', compact('program','programD', 'array','others'));

    }

    public function viewCountry($country){
        $study=DB::table('studies')->where('country', 'LIKE', '%'.$country.'%')->first();
        $output =nl2br($study->notes);
        $Snotes = explode('<br />', $output);
        $op2=nl2br($study->whystudy);
        $Swhystdy = explode('<br />', $op2);
        $op3=nl2br($study->wtliketo);
        $Sliketo = explode('<br />', $op3);
        $op4=nl2br($study->wttostudy);
        $Swtto = explode('<br />', $op4);
        $op5=nl2br($study->mjcity);
        $Smjcity = explode('<br />', $op5);
        $op6=nl2br($study->wcuniat);
        $Swcuniat = explode('<br />', $op6);
        $op7=nl2br($study->pracinfo);
        $Spinfo = explode('<br />', $op7);
        $op8=nl2br($study->waytqlfy);
        $Swtql = explode('<br />', $op8);

        $living=DB::table('livings')->where('country', 'LIKE', '%'.$country.'%')->first();
        $opl1=nl2br($living->notes);
        $Lnotes = explode('<br />', $opl1);
        $opl2=nl2br($living->tutnfees);
        $Ltutnfees = explode('<br />', $opl2);
        $opl3=nl2br($living->lvngcst);
        $Lvngc = explode('<br />', $opl3);


        $about=DB::table('abouts')->where('country', 'LIKE', '%'.$country.'%')->first();
        $opA1=nl2br($about->notes);
        $Aboutn = explode('<br />', $opA1);

        $unis=DB::table('cunis')->where('country', 'LIKE', '%'.$country.'%')->first();
        $stdvisa=DB::table('stdvisas')->where('country', 'LIKE', '%'.$country.'%')->first();
        $opV=nl2br($stdvisa->notes);
        $SVisa = explode('<br />', $opV);

        $workp=DB::table('workpermits')->where('country', 'LIKE', '%'.$country.'%')->first();
        $opWP=nl2br($workp->notes);
        $WorkP= explode('<br />', $opWP);
        $universityName=DB::table('universities')->where('country', 'LIKE', '%'.$country.'%')->get();

        $htapply=DB::table('htapplys')->where('country', 'LIKE', '%'.$country.'%')->first();
        $opht1=nl2br($htapply->notes);
        $htNotes = explode('<br />', $opht1);
        $opht2=nl2br($htapply->documents);
        $htDocs = explode('<br />', $opht2);
        $opht3=nl2br($htapply->englishskill);
        $htSkills = explode('<br />', $opht3);
        $opht4=nl2br($htapply->deadlines);
        $htDead = explode('<br />', $opht4);

        return view('viewByCountry', compact('study','living', 'htapply', 'about', 'stdvisa', 'workp', 'unis','Snotes','Swhystdy', 'Sliketo', 'Swtto', 'Smjcity',
        'Swcuniat', 'Spinfo', 'Swtql', 'Lnotes', 'Ltutnfees','Lvngc','Aboutn','SVisa','WorkP','universityName', 'htNotes', 'htDocs', 'htDead', 'htSkills'));
    }

    public function viewRnkdinCountry($country){
        $rnkduni=DB::table('ranks')->where('country', 'LIKE', '%'.$country.'%')->orderBy('timesrnk','asc')->get();
        $no=count($rnkduni);
        //return response()->json($rnkduni);
        return view('RankedinCountry', compact('rnkduni', 'no','country'));
    }

    public function UniversityView($university){
        $uniData=DB::table('universities')->where('organization','LIKE',$university)->first();
        $rank=DB::table('ranks')->where('university','like', $university)->where('year', '=', '2021')->first();
        $rankprev=DB::table('ranks')->where('university','like', $university)->where('year', '=', '2020')->first();
        $data=DB::table('programs')->where('email','like', $uniData->email)->select('discipline')->distinct()->get();
        $program=DB::table('programs')->where('email','like', $uniData->email)->select('id','discipline','program','course')->get();
        $count=count($program);
        $R2STD=nl2br($uniData->ReasonToStdyH);
        $reason = explode('<br />', $R2STD);
        //dd($uniData);
        return view('University.UniversityDetails',compact('uniData', 'rank', 'rankprev','data','program','count','reason'));
    }

    public function SearchDiscipline($discipline)
    {
        $data = DB::table('programs')
            ->Join('universities', 'universities.email', '=', 'programs.email')
            ->where('discipline', 'like', $discipline)
            ->where('program', 'like', 'Masters of Science')
            ->select('programs.id','programs.course','programs.about','universities.organization','universities.country','universities.university_logo')
            ->get();
        $faculty = DB::table('departments')->where('disciplines', 'like', $discipline)->get();
        $uni = DB::table('programs')->where('discipline', 'like', $discipline)->select('email')->distinct()->get();
        $array = json_decode(json_encode($uni), true);
        foreach ($array as $r){
                $name[] = DB::table('universities')->where('email', 'like', $r)
                ->rightjoin('ranks','universities.organization','=','ranks.university')->where('ranks.year','like','2021')
                ->select('universities.organization','universities.country','universities.provience','ranks.*')
                ->orderBy('ranks.topuni','ASC')
                ->get();

            }

        $A=DB::table('universities')->whereIn('email', $array)->select('organization')->get();
        $array2 = json_decode(json_encode($A), true);
        $B=DB::table('ranks')->whereIn('university', $array2)->where('year','like','2021')->paginate('25');
        //dd($data);
        return view('BrDiscipline', compact('faculty','discipline','data','name','B'));
    }

    public function SearchData(){
        $data=DB::table('programs')->get();
        return view('Search',compact('data'));
    }

    public function SearchProgramsCountry(Request $request){
        $discipline=$request->discipline;
        $location=$request->location;
        $data=array();
        $data['d']=$discipline;
        $data['l']=$location;

        if($discipline && !$location){
            $program = DB::table('programs')
                ->rightJoin('universities', 'universities.email', '=', 'programs.email')
                ->where('discipline', 'LIKE', '%'.$discipline.'%')
                ->orWhere('faculty', 'LIKE', '%'.$discipline.'%')
                ->orWhere('course', 'LIKE', '%'.$discipline.'%')
                ->select('programs.id','programs.course','programs.about','programs.delivery','programs.program','programs.study_status','programs.fees','programs.duration','universities.organization','universities.university_logo')
                ->paginate('10');
            $programBCost = DB::table('programs')
                ->rightJoin('universities', 'universities.email', '=', 'programs.email')
                ->where('discipline', 'LIKE', '%'.$discipline.'%')
                ->orWhere('faculty', 'LIKE', '%'.$discipline.'%')
                ->orWhere('course', 'LIKE', '%'.$discipline.'%')
                ->select('programs.id','programs.course','programs.about','programs.delivery','programs.program','programs.study_status','programs.fees','programs.duration','universities.organization','universities.university_logo')
                ->orderBy('programs.fees','ASC')
                ->paginate('10');
            $D = DB::table('programs')
                ->rightJoin('universities', 'universities.email', '=', 'programs.email')
                ->where('discipline', 'LIKE', '%'.$discipline.'%')
                ->orWhere('faculty', 'LIKE', '%'.$discipline.'%')
                ->orWhere('course', 'LIKE', '%'.$discipline.'%')
                ->select('programs.discipline')
                ->first();
            //dd($D);
            $count=count($program);
            $disciplines=DB::table('disciplines')->get();
            $disdata=DB::table('departments')->where('departments','like', $D->discipline)->orWhere('disciplines','like', $D->discipline)
                ->select('disciplines')->first();
            //dd($disdata);
            $faculty=DB::table('departments')->where('disciplines',$disdata->disciplines)->get();
            $nolink=0;

            return view('VisitByDiscipline', compact('program', 'discipline','programBCost','count','disciplines','disdata','faculty','nolink'));
        }
        if(!$discipline && $location){
            $program = DB::table('programs')
                ->rightJoin('universities', 'universities.email', '=', 'programs.email')
                ->where('universities.country','like', '%'.$location.'%')
                ->orWhere('universities.provience','like', '%'.$location.'%')
                ->select('programs.id','programs.course','programs.about','programs.delivery','programs.program','programs.study_status','programs.fees','programs.duration','universities.organization','universities.university_logo')
                ->paginate('10');
            $programBCost = DB::table('programs')
                ->rightJoin('universities', 'universities.email', '=', 'programs.email')
                ->where('universities.country','like', '%'.$location.'%')
                ->orWhere('universities.provience','like', '%'.$location.'%')
                ->select('programs.id','programs.course','programs.about','programs.delivery','programs.program','programs.study_status','programs.fees','programs.duration','universities.organization','universities.university_logo')
                ->orderBy('programs.fees','ASC')
                ->paginate('10');
            $D = DB::table('programs')
                ->rightJoin('universities', 'universities.email', '=', 'programs.email')
                ->where('universities.country','like', '%'.$location.'%')
                ->orWhere('universities.provience','like', '%'.$location.'%')
                ->select('programs.discipline')
                ->first();
            //dd($program);
            $count=count($program);
            $disciplines=DB::table('disciplines')->get();
            $disdata=DB::table('departments')->where('departments','like', $D->discipline)->orWhere('disciplines','like', $D->discipline)
                ->select('disciplines')->first();
            //dd($disdata);
            $faculty=DB::table('departments')->where('disciplines',$disdata->disciplines)->get();
            $nolink=0;
            //dd($nolink);

            return view('VisitByDiscipline', compact('program', 'discipline','programBCost','count','disciplines','disdata','faculty','nolink'));
        }
        if($discipline && $location){
            $disc = DB::table('programs')
                ->rightJoin('universities', 'universities.email', '=', 'programs.email')
                ->where('discipline', 'LIKE', '%'.$discipline.'%')
                ->where('universities.country','like', '%'.$location.'%');
            $prog = DB::table('programs')
                ->rightJoin('universities', 'universities.email', '=', 'programs.email')
                ->where('course', 'LIKE', '%'.$discipline.'%')
                ->where('universities.country','like', '%'.$location.'%');
            $program = DB::table('programs')
                ->rightJoin('universities', 'universities.email', '=', 'programs.email')
                ->Where('faculty', 'LIKE', '%'.$discipline.'%')
                ->where('universities.country','like', '%'.$location.'%')
                ->union($disc)
                ->union($prog)
                ->get();
            $programBCost = DB::table('programs')
                ->rightJoin('universities', 'universities.email', '=', 'programs.email')
                ->Where('faculty', 'LIKE', '%'.$discipline.'%')
                ->where('universities.country','like', '%'.$location.'%')
                ->union($disc)
                ->union($prog)
                ->get();
            $D = DB::table('programs')
                ->rightJoin('universities', 'universities.email', '=', 'programs.email')
                ->where('discipline', 'LIKE', '%'.$discipline.'%')
                ->orWhere('faculty', 'LIKE', '%'.$discipline.'%')
                ->orWhere('course', 'LIKE', '%'.$discipline.'%')
                ->select('programs.discipline')
                ->first();


            $count=count($program);
            $disciplines=DB::table('disciplines')->get();
            $disdata=DB::table('departments')->where('departments','like', $D->discipline)->orWhere('disciplines','like', $D->discipline)
                ->select('disciplines')->first();

            $faculty=DB::table('departments')->where('disciplines',$disdata->disciplines)->get();
            $nolink="1"; //dd($nolink);

            return view('VisitByDiscipline', compact('program', 'discipline','programBCost','count','disciplines','disdata','faculty','nolink'));
        }
        if(!$discipline && !$location){
            return redirect()->back();
        }


    }

    public function UniversityScholarship($university){
        $uniData=DB::table('universities')->where('organization','LIKE',$university)->first();
        $program=DB::table('programs')->where('email','like', $uniData->email)->select('discipline','program','course')->get();
        $rank=DB::table('ranks')->where('university','like', $university)->where('year', '=', '2021')->first();
        $count=count($program);

        $scholarship=DB::table('scholarships')->where('name','like',$university)->get();
        //dd($program);
        return view('UniScholarships',compact('uniData','rank','count', 'scholarship'));
    }

    public function filterLocation(Request $request, $discipline){
        $query=$request->id;
        $query2=$request->id2;
        $query3=$request->id3;
        $query4=$request->id4;
        $query5=$request->id5;
        $query6=$request->id6;
        $data=array();
        $data['1']=$query;
        $data['2']=$query2;
        $data['3']=$query3;
        $data['4']=$query4;
        $data['5']=$query5;
        $data['6']=$query6;

        $fee1=$request->fee1;


        if(!$fee1){
            $fee1="1,10000000";
        }

        $array = explode(',', $fee1);

        //dd($query2);
        if (!$query && !$query2 && !$query3 && !$query4 && !$query5 && !$query6 && !$fee1){
            return redirect('/search-master-degree/'.$discipline);
        }
        if(!$query && !$query2 && !$query3 && !$query4 && !$query5 && !$query6 ){
            $B=DB::table('universities')->select('email')->get();
        }
        else{
            $B=DB::table('universities')->whereIn('country', $data)->select('email')->get();
        }
        $array2 = json_decode(json_encode($B), true);
        //dd($B);
        $program = DB::table('universities')
            ->rightJoin('programs', 'universities.email', '=', 'programs.email')
            ->whereIn('universities.email', $array2)
            ->whereBetween('programs.fees', [$array[0], $array[1]])
            ->where('discipline','LIKE', $discipline)
            ->paginate('10');
        //dd($program);
        $programBCost = DB::table('universities')
            ->rightJoin('programs', 'universities.email', '=', 'programs.email')
            ->whereIn('universities.email', $array2)
            ->whereBetween('programs.fees', [$array[0], $array[1]])
            ->where('discipline','LIKE', $discipline)
            ->orWhere('faculty','like', '%'.$discipline.'%')
            ->orderBy('programs.fees','ASC')
            ->paginate('10');


        //dd($array);
        $count=count($program);
        $disciplines=DB::table('disciplines')->get();
        $disdata=DB::table('departments')->where('departments','like','%'.$discipline.'%')
            ->orWhere('disciplines','like','%'.$discipline.'%')->select('disciplines')->first();
        $faculty=DB::table('departments')->where('disciplines',$disdata->disciplines)->get();
        return view('Filter', compact('program', 'discipline','programBCost','count','disciplines','disdata','faculty','data','query','query3','query2','query4','query5','query6','fee1'));
    }

    public function AllCountries(){

        $country=DB::table('countries')->orderBy('country','ASC')->get();
        return view('AllCountries', compact('country'));
    }
}
