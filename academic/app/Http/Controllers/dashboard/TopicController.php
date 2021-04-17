<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Course;

class TopicController extends Controller
{
    //
    
    //INDEX
    function index(){
        $data_tp = Topic::all();
        $data_ac = Course::all();

        return view('pages.dashboard.CRUD-topic',['data_tp'=>$data_tp,'data_ac'=>$data_ac]);
    }
    // CREATE NEW
    function create(Request $request){
        $topics = new Topic;
        $topics->course_id = $request->input('course-id');
        $topics->name = $request->input('name');
        $topics->description = '';
        $topics->open_time = $request->input('open-day');
        $topics->close_time = $request->input('close-day');
        $topics->_status = 1;
        $topics->save();

        return redirect()->back()-> with('jsAlert', 'Added success');


    }
    //UPDATE
    function update(Request $request){
        $topics = Topic::findOrFail($request->input('id-course'));
        $topics->course_id = $request->input('course-id');
        $topics->name = $request->input('name');
        $topics->description = '';
        $topics->open_time = $request->input('open-day');
        $topics->close_time = $request->input('close-day');
        $topics->_status = 1;
        $topics->save();

        return redirect()->back()-> with('jsAlert', 'updated success!');
    }
    //DELETE
    function delete(Request $request){  



        //$courses->registrations()->delete();
        $topics = Topic::findOrFail($request->input('del'));

        $topics->delete();

        return redirect()->back()-> with('jsAlert', 'delete success!');
    }
}
