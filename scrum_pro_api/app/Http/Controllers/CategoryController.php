<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;
use App\Http\Requests\StoreCategoryRequest;

class CategoryController extends Controller
{

    public function index()
    {
        return Categories::all();
    }


    public function store(StoreCategoryRequest $request)
    {
    
        Categories::create($request->validated());

        return response()->json([

            'status' => true ,
            'msg' => 'Successfully Created New Category' ,
        ]);
    }

    public function show(Categories $category)
    {
        return $category;
    }


    public function update(StoreCategoryRequest $request , Categories $category)
    {
        $category->update($request->validated());

        return response()->json([

            'status' => true ,
            'msg' => 'Successfully Updated Category'
        ]);
    }

    public function destroy(Categories $category)
    {
        $category->delete();

        return response()->json([

            'status' => true ,
            'msg' => 'Successfully Deleted Category'
        ]);
    }
}
