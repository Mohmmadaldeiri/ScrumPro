<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roles;
use App\Http\Requests\StoreRoleRequest;

class RoleController extends Controller
{

    public function index()
    {
        return Roles::all();
    }

    public function store(StoreRoleRequest $request)
    {
        Roles::create($request->validated());

        return response()->json([

            'status' => true ,
            'msg' => 'Successfully Created New Role' ,
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
