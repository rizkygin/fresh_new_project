<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Feature;

class employeescontroller extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view ('employee.index',compact('roles'));
    }
}
