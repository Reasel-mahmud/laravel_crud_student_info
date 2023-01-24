<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Section;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public $student, $image, $imageName, $imgUrl, $directory;
    public function index(){
        return view('crud.add', [
            'sections'=>Section::all(),
            'departments'=>Department::all()
            ]);
    }
    public function saveStudent(Request $request){
        $this->student = new Student();
        $this->student->name          = $request->name;
        $this->student->phone         = $request->phone;
        $this->student->email         = $request->email;
        $this->student->department_id = $request->department_id;
        $this->student->section_id    = $request->section_id;
        $this->student->address       = $request->address;
        // if ($request->file('image')){
            //

            //     if ($request->id){
            //         unlink( $this->student->image= $this->saveImage($request);
            //     }
            //     self::$student->image = self::saveImage($request);
            // }
            // self::$student->save();
        // }
        $this->student->save();
        return redirect(route('home'));

    }
    // if ($request->file('image')){
    //     if ($request->id){
    //         unlink(self::$student->image);
    //     }
    //     self::$student->image = self::saveImage($request);
    // }
    // self::$student->save();
    private function saveImage($request){
        $this->image=$request->file('image');
        $this->imageName=rand().'.'.$this->image->getClientOriginalExtension();
        $this->directory='asset/image/';
        $this->imgUrl=$this->directory.$this->imageName;
        $this->image->move($this->directory,$this->imageName);
        return $this->imgUrl;
    }

    public function manageStudent(){
        $this->student = DB::table('students')
            ->join('departments', 'departments.id', '=', 'students.department_id')
            ->join('sections', 'sections.id', '=', 'students.section_id')
            ->select('students.*', 'departments.*', 'sections.*' )
            ->get();
         return view('crud.manage',[
            'students'=>$this->student,
        ]);
    }
   public function editStudent($id){
    $this->student= Student::find($id);
    $this->department = Department::all();
    $this->section = Section::all();
       return view('crud.edit',[

        'students'=> $this->student,
        'departments' => $this->department,
        'sections' => $this->section

       ]);
   }

   public function delete(Request $request)
   {
       $this->student = Student::find($request->student_id);
       unlink($this->student->image);
       $this->student->delete();
       return back();
   }
}
