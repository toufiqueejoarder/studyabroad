<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'categoryName' => 'required',
        ]);

        $category=new Category;
        $category->program_category =$request->input('categoryName');
        $category->save();

        return redirect()->back() ->with('alert', 'Category Added Successfully!');
    }
}
