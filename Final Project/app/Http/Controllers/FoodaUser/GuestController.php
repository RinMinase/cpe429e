<?php

namespace App\Http\Controllers\FoodaUser;

use DateTime;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class GuestController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {	
		$data['posts'] = DB::table('posts')
			->join('power_account','posts.power_account_idpower_account','=','power_account.idpower_account')
			->select('posts.*','power_account.brand','power_account.banner','power_account.description')
			->get();
			
		return view('fooda\user\dashboard-guest',$data);
    }
}