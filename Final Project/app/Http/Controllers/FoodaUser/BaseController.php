<?php

namespace App\Http\Controllers\FoodaUser;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
	
	//use BaseController;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$data['name'] = Input::get('name','comes');
		$data['info'] = DB::table('users')->get(); 
		//array( array('name' => 'eve', 'power' => 'night'), array('name' => 'day', 'power' => 'sun') );
		//$data = [ ['name' => 'eve', 'power' => 'night'],['name' => 'day', 'power' => 'sun'] ];
        return view('fooda\user\testing',$data);
    }
	
	/*
	 * List of Tables
	 * - users
	 * - power_account
	 * - favorites 
	 * - feed 
	 * - posts 
	 * - admin_account
	 */
	
	public function testname()
    {
		$data['name'] = Auth::user()->name;
		$data['info'] = DB::table('users')->get(); 
		//array( array('name' => 'eve', 'power' => 'night'), array('name' => 'day', 'power' => 'sun') );
		//$data = [ ['name' => 'eve', 'power' => 'night'],['name' => 'day', 'power' => 'sun'] ];
		
		
        return view('fooda\user\testing',$data);
		//return view('fooda\user\user_dashboard',$data); 
    }
	
	public function loadDashboard($food = null)
	{
		/*
		 * Gets and passes information profile information to view
		 * 
		 *
		 */
		 
		 $id = 0;
		 if(Auth::check())
		 {
			 $id = Auth::user()->id;
		 }
		 
		 if($food == null)
		 {
			 $data['posts'] = DB::table('posts')
				->join('power_account','posts.power_account_idpower_account','=','power_account.idpower_account')
				->select('posts.*','power_account.idpower_account','power_account.brand','power_account.banner','power_account.description')
			->orderBy('idposts','desc')
				->get();
		 }
		 else
		 {
			 $data['posts'] = DB::table('posts')
				->join('power_account','posts.power_account_idpower_account','=','power_account.idpower_account')
				->select('posts.*','power_account.idpower_account','power_account.brand','power_account.banner','power_account.description')
				->where('power_account.idpower_account',$food)
				->orderBy('idposts','desc')
				->get();
				
			
		 }
			 
		 if($id == null)
		 {
			$data['favorites'] = [];
		 }
		 else
		 {
			 $data['favorites'] = DB::table('favorites')
				->join('power_account','favorites.power_account_idpower_account','=','power_account.idpower_account')
				->select('favorites.*','power_account.brand','power_account.idpower_account')
				->where('favorites.users_id',$id)
				->get();   //get users information using session
				
			 $now = date('Y-m-d H:i:s'); //->getTimestamp();
			  DB::table('favorites')
				->where('users_id',$id)
				->update(['last_viewed' => $now]);
		 }
		 
		$user = DB::table('admin_account')->where('users_id',$id)->get();
		
		if(count($user) <= 0)
		{
			$data['isAdmin']='false';
		}
		else
		{
			$data['isAdmin']='true';
		}
		
		$user = DB::table('power_account')->where('users_id',$id)->get();
		
		if(count($user) <= 0)
		{
			$data['hasStore']='false';
		}
		else
		{
			$data['hasStore']='true';
		}
		 
		return view('fooda\user\dashboard-user',$data);  //return view
	}
	
	public function loadFeed($id)
	{
		/*
		 * Loads the feed of the user without regard to the app timestamp
		 *
		 *
		 */
		 
		 $feed = DB::table('feed')->where('users_id',$id)->get(); //get feed using id only
		 
		 //return view
	}
	
	public function loadFoods($regex = null)
	{
		/*
		 * Loads all the restaurants with or without regard to a search regex
		 *
		 *
		 */
		 
		 if($regex != null)    //select from power account but only, name,description, and banner
		 {
			 $foods = DB::table('power_account')->select('name')->addSelect('description')->addSelect('banner')->where('name',$regex)->get();
		 }else
		 {
			 $foods = DB::table('power_account')->select('name')->addSelect('description')->addSelect('banner')->get();
		 }
		 
		 return $regex;
	}
	
	public function loadFavorites($id)
	{
		/*
		 * Loads all the users saved favorites
		 *
		 *
		 */
		 
		 $faves = DB::table('favorites')->where('users_id',$id)->get(); //get favorites table with id
		 
		 return $this->loadDashBoard();
		 //return view 
	}
	
	public function addToFavorites($foods)
	{
		/*
		 * Adds the selected restaurant to the favorites tab and redirects to the same page
		 *
		 *
		 */
		 $id = Auth::user()->id;
		 
		 $table = DB::select('SELECT * FROM favorites WHERE power_account_idpower_account = ? AND users_id = ?',[$foods,$id]);
		 
		 $now = date('Y-m-d H:i:s'); //->getTimestamp();
		 
		 if(count($table)<1)
		 {
			 DB::table('favorites')
				->insert(    
				[ 'users_id' => $id, 'power_account_idpower_account' => $foods,'last_viewed' => $now ]
			 );
		 }
		 
		 
		 return $this->loadDashboard();
		 //return view
	}
	
	public function removeFromFavorites($id,$foods)
	{
		/*
		 * Removes a favorite from the favorites list and redirects to the favorites page
		 *
		 *
		 */
		 //delete entry from favorites table if $id and $food matches entry contents
		 DB::table('favorites')->where(DB::raw("users_id = $id AND power_account_idpower_account = $foods"))->delete(); 
		 
		 //return view
	}
	
	public function loadNewFeed($id)
	{
		/*
		 * Loads the feed with regard to the timestamp
		 * 
		 *
		 */
		 //->whereDate('created_at', '2016-10-10')
		 //same with loadFeed() but with timestamp clause
		 
	}
	
	public function alertRecentFeed($id)
	{
		/*
		 * Loads and alerts with the user's feed with regard to the timestamp and the favorites list
		 *
		 *
		 */
		 //same with loadFavorites() but with timestamp clause
		 
	}
}
