<?php

namespace App\Http\Controllers;

use App\Models\Discipline;
use Illuminate\Http\Request;

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
}
