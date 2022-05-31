<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Employee;

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

    // show edit
    public function show_editpage(){
        
        $data = DB::table('employees')->get();
        return view('admin.edit')
        ->with('EMP', $data);
    }

    // add
    public function create(){
        return view('admin.frm_add');
    }

    // store
    public function store(Request $request){
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'gender'=>'required',
            'email'=>'required',
            'salary'=>'required',
            'other_salary'=>'required',
            'dpt_salary'=>'required',
            'phone_bill'=>'required',
            'dpt'=>'required',
            'role'=>'required'
        ]);

        $employee = new employee;
        $employee-> fname =$request->fname;
        $employee-> lname =$request->lname;
        $employee-> address =$request->address;
        $employee-> phone =$request->phone;
        $employee-> gender =$request->gender;
        $employee-> email =$request->email;
        $employee-> salary =$request->salary;
        $employee-> other_salary =$request->salary;
        $employee-> dpt_salary =$request->dpt_salary;
        $employee-> phone_bill =$request->phone_bill;
        $employee-> dpt =$request->dpt;
        $employee-> role =$request->role;

        $employee->save();

        return to_route('admin.frm_add')->with('Success','บันทึกข้อมูลสำเร็จ');
        
    }
}
