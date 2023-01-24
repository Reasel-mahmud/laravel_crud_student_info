<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public $department,$manage;
    public function index(){
        return view('crud.add-department');
    }
    public function saveDepartment(Request $request){
        $this->department= new Department();
        $this->department->department_name = $request->department_name;
        $this->department->department_code = $request->department_code;
        $this->department->save();
        return redirect(route('add.department'));
    }
}
