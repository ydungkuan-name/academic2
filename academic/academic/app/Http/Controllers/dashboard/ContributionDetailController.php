<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contribution;
use App\Models\File;
use App\Models\Account;
use App\Models\Account_user;

class ContributionDetailController extends Controller
{
    //
    function index(Request $request){   
        $contributions = Contribution::all();    

        foreach($contributions as $ls){
            if($ls->id == $request->query('contribution-id')){
                $user_upload = Account::where('id', $ls->user_id)->get();
                $user_acs = Account_user::where('id', $ls->user_id)->get();

                $user_name = '';
                $user_ac='';
                foreach($user_acs as $lsus){$user_ac =  $lsus->name;}

                foreach($user_upload as $lsu){$user_name =  $lsu->user_name;}

                $file_count = File::where('contribution_id', $ls->id)->count();
                $file = File::where('contribution_id', $ls->id)->get();
                return view('pages.dashboard.contributions-detail',['contributions_data'=>$ls,'ls_file'=>$file,'user_upload'=>$user_name,'total_file'=>$file_count,'user_ac'=>$user_ac]);                


            }
        }

        return redirect('dash-board/manager-contribution');  

    }

    
}
