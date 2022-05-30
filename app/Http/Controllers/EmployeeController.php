<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Index
    public function index(){
        $data['EMP']=Employee::orderBy('id','desc');
        return view('admin.index',$data);
    }

    // Create resource
    public function create(){
        return view('admin.frm_add');
    }
}
