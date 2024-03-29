<?php

namespace App\Http\Controllers;

use DB;
use Redirect;

/**
 * Class HomeController
 *
 * @author  Zeeshan Ahmed <ziishaned@gmail.com>
 * @package App\Http\Controllers
 */
class HomeController extends Controller
{
    /**
     * Show home view to guest.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home()
    {
        return view('home');
    }

    public function home2($subdomain){
        $team = DB::table('teams')
                ->where('subdomain',$subdomain)
                ->get();
        
        if(count($team) == 0){
            return Redirect::to('https://hubbucs.com');
        }else{
            $name = $team[0]->name;
            $logo = $team[0]->team_logo;
            return view('home2')->with(['name'=>$name,'logo'=>$logo,'subdomain'=>$subdomain]);
        }
    }

    public function customerPortal($subdomain){
        extract($_GET);
        $team = DB::table('teams')
                ->where('subdomain',$subdomain)
                ->get();
        
        if(count($team) == 0){
            return Redirect::to('https://hubbucs.com');
        }else{
            return Redirect::to('http://hubbdesk.com/customer_portal/?com='.$subdomain);
        }
    }
}
