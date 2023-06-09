<?php

use App\Http\Controllers\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

route::get('/sas',function(){
    dd('BIsa n');
})->middleware('permission:edit_item');