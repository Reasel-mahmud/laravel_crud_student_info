<?php

namespace App\Http\Controllers;

use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public $section,$manage;
    public function index(){
        return view('crud.add-section');
    }
    public function saveSection(Request $request){
        $this->section= new Section();
        $this->section->section_name = $request->section_name;
        $this->section->save();
        return redirect(route('add.section'));
    }
}
