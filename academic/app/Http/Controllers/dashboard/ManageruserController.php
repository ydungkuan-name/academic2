<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Faculty;
use App\Models\Account;
use App\Models\Account_user;
class ManageruserController extends Controller
{
    //
    
    //INDEX
    function index(){
        $data_ac = Account::all();
        $data_acu = Account_user::all();
        return view('pages.dashboard.studen-account',['data_ac'=>$data_ac,'data_acu'=>$data_acu]);
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
