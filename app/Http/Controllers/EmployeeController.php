<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Index
    public function index(){
        // $data['EMP'] = Employee::orderBy('id','desc');
        // $data = DB::orderBy('id','desc');
        $data = DB::table('employees')->get();

        return view('admin.index')
        ->with('EMP', $data);

    }

    // Create resource
    public function create(){
        return view('admin.frm_add');
    }
}
