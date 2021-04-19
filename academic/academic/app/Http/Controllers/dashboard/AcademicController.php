<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Topic;
use App\Models\Contribution;
use App\Models\File;
use App\Models\Comment;


class AcademicController extends Controller
{
    //
    function index(){
        $data_ac = Course::all();
        return view('pages.dashboard.CRUD-academic',['data_ac'=>$data_ac]);
    }
    function create(Request $request){
        $courses = new Course;
        $courses->name = $request->input('name');
        $courses->open_time = $request->input('open-day');
        $courses->close_time = $request->input('close-day');
        $courses->_status = 1;
        $courses->save();
        return redirect()->back()-> with('jsAlert', 'Added success');


    }
    function update(Request $request){
        $courses = Course::findOrFail($request->input('id-course'));
        $courses->name = $request->input('name');
        $courses->open_time = $request->input('open-day');
        $courses->close_time = $request->input('close-day');
        $courses->_status = 1;
        $courses->save();

        return redirect()->back()-> with('jsAlert', 'updated success!');
    }
    function delete(Request $request){
        



        //$courses->registrations()->delete();
        $courses = Course::findOrFail($request->input('del'));

        $courses->delete();








        return redirect()->back()-> with('jsAlert', 'delete success!');
    }
}
