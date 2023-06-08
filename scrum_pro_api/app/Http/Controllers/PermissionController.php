<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permissions;
use App\Http\Requests\StorePermissionRequest;

class PermissionController extends Controller
{

    public function index()
    {
        return Permissions::all();
    }

    public function store(StorePermissionRequest $request)
    {
        Permissions::create($request->validated());

        return response()->json([

            'status' => true ,
            'msg' => 'Successfully Created New Permission' ,
        ]);

    }

    public function show(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
