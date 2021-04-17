<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Course;
use App\Models\Topic;
use App\Models\Contribution;
use App\Models\File;
use App\Models\Comment;

class FacultyController extends Controller
{
    //INDEX
    function index(){
        $data_fc = Faculty::all();
        $data_ac = Course::all();

        return view('pages.dashboard.CRUD-faculty',['data_fc'=>$data_fc,'data_ac'=>$data_ac]);
    }
    // CREATE NEW
    function create(Request $request){
        $falcutys = new Faculty;
        $falcutys->course_id = $request->input('course-id');
        $falcutys->name = $request->input('name');
        $falcutys->open_time = $request->input('open-day');
        $falcutys->close_time = $request->input('close-day');
        $falcutys->_status = 1;
        $falcutys->save();

        return redirect()->back()-> with('jsAlert', 'Added success');


    }
    //UPDATE
    function update(Request $request){
        $falcutys = Faculty::findOrFail($request->input('id-course'));
        $falcutys->course_id = $request->input('course-id');
        $falcutys->name = $request->input('name');
        $falcutys->open_time = $request->input('open-day');
        $falcutys->close_time = $request->input('close-day');
        $falcutys->_status = 1;
        $falcutys->save();

        return redirect()->back()-> with('jsAlert', 'updated success!');
    }
    //DELETE
    function delete(Request $request){  



        //$courses->registrations()->delete();
        $falcutys = Faculty::findOrFail($request->input('del'));

        $falcutys->delete();

        return redirect()->back()-> with('jsAlert', 'delete success!');
    }
}
