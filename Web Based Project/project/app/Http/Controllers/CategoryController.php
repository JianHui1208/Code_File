<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function create(){
        return view('insertCa');
    }

    public function store(){
        $r=request();
        $addFoodCategory=Category::create([
            'id'=>$r->id,
            'FoodCategory'=>$r->FoodCategory,
        ]);
        Return redirect()->route('category');
    }

    public function show(){
        $category=DB::table('categories')
        ->select('categories.*')
        ->get();
        return view('menu')->with('categories',$category);
    }
}
