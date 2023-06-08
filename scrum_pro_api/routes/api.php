<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionRoleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SkillController;

Route::group( ['prefix' => 'ScrumPro'] , function(){

    Route::apiResource('permissions' , PermissionController::class);

    Route::apiResource('roles' , RoleController::class);

    Route::apiResource('rpemission-role' , PermissionRoleController::class);

    Route::post('manage-assign-permission-to-role' , [PermissionRoleController::class , 'manageAssignPermissionToRole']);

    Route::apiResource('categories' , CategoryController::class);

    Route::apiResource('skills' , SkillController::class);

    Route::get('skills/show-skill/{skill}' , [SkillController::class , 'showSkill']);


});
