<?php

namespace App\Http\Controllers\FoodaUser;

use DateTime;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class FoodsController extends Controller
{
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
        return view('fooda\user\testing');
    }
	
	public function verifyFoods()
	{
		
		$id = Auth::user()->id;
		$user = DB::table('power_account')->where('users_id',$id)->get();
		
		if(count($user) <= 0)
		{
			return view('welcome');
		}
	}
	
	public function viewAccountDetails($id)
	{
		/*
		 * Loads the power account's profile
		 *
		 *
		 */
		 DB::table('power_account')->where('users_id',$id)->first(); //load the power_account profile of user if any
	}
	
	public function updateAccountDetails() //what to put
	{
		/*
		 * Updates the power account's details
		 *
		 *
		 */
		 //update sheet guys
	}
	
	public function loadPostDashboard()
	{
		/*
		 * Loads the power account's dashboard, where the user can see his recent posts
		 * add a post, view the status of a post, and view other restaurant's posts
		 *
		 */
		 //just return view with all the needed data on it
		 
		 $id = 0;
		 if(Auth::check())
		 {
			 $id = Auth::user()->id;
		 }
		
		$data['favorites'] = DB::table('favorites')
				->join('power_account','favorites.power_account_idpower_account','=','power_account.idpower_account')
				->select('favorites.*','power_account.brand')
				->where('favorites.users_id',$id)
				->get(); 
		
		 $powerid = DB::table('power_account')
			->select('idpower_account','post_limit')
			->where('users_id',$id)
			->get();
			
		 foreach($powerid as $p):
			$id = $p->idpower_account;
			$data['post_limit'] = $p->post_limit;
		 endforeach;
		 
		$data['posts'] = DB::table('posts')
			->join('power_account','posts.power_account_idpower_account','=','power_account.idpower_account')
			->select('posts.*','power_account.brand')
			->where('power_account.idpower_account',$id)
			->get();
		 
		return view('/fooda/res/dashboard-store-my-posts',$data);
	}
	
	public function loadPostView()
	{
		$id = 0;
		 if(Auth::check())
		 {
			 $id = Auth::user()->id;
		 }
		
		$data['favorites'] = DB::table('favorites')
				->join('power_account','favorites.power_account_idpower_account','=','power_account.idpower_account')
				->select('favorites.*','power_account.brand')
				->where('favorites.users_id',$id)
				->get(); 
		
		$info = DB::table('power_account')
			->select('idpower_account','post_limit')
			->where('users_id',$id)
			->get(); 
			
		foreach($info as $inf):
			$data['account_id'] = $inf->idpower_account;
			$data['post_limit'] = $inf->post_limit;
		endforeach;
		
		$data['posts'] = DB::table('posts')
			->join('power_account','posts.power_account_idpower_account','=','power_account.idpower_account')
			->select('posts.*','power_account.brand','power_account.banner','power_account.description')
			->orderBy('idposts','desc')
			->get();
			
		return view('/fooda/res/dashboard-store-view',$data);
	}
	
	public function createPostPage()
	{
		/*
		 * Creates a new post where the user can add his promotion, but it does not get sent yet
		 *
		 *
		 */
		 //get title
		 //store info if any
		 //upload pic and store pic address if any
		 $id = 0;
		 if(Auth::check())
		 {
			 $id = Auth::user()->id;
		 }
		
		$data['favorites'] = DB::table('favorites')
				->join('power_account','favorites.power_account_idpower_account','=','power_account.idpower_account')
				->select('favorites.*','power_account.brand')
				->where('favorites.users_id',$id)
				->get(); 
				
		$info = DB::table('power_account')
			->select('idpower_account','post_limit')
			->where('users_id',$id)
			->get(); 
			
		foreach($info as $inf):
			$data['account_id'] = $inf->idpower_account;
			$data['post_limit'] = $inf->post_limit;
		endforeach;
		
		 return view('/fooda/res/dashboard-store-add',$data);
	}
	
	public function createPost()
	{
		$data['title'] = Input::get('title','Promo!!!');
		$now = date('Y-m-d H:i:s');
		$data['created_at'] = $now;//->getTimestamp();
		$data['info'] = Input::get('description');
		$data['power_account_idpower_account'] = Input::get('account_id');
		
		if(Input::hasFile('image'))
		{
			//$file = Input::file('image');
			$imageName = $data['power_account_idpower_account'].'_'.$data['title'].'.'.Input::file('image')->getClientOriginalExtension();
			$base = base_path().'\\public\\img\\';
			$destinationPath = addslashes($base); 
			//if(Input::file('image')->isValid()){}
			Input::file('image')->move($destinationPath,$imageName);
			$data['poster'] = '/img/'.$imageName;
		}
		
		DB::table('posts')->insert($data);
		
		return $this->loadPostView();
	}
	
	public function loadAllPosts($id)
	{
		/*
		 * Loads a page where the power account can all of the posts he create, published or not,
		 * arranged from most recent to oldest
		 *
		 */
		 //load all power_account's posts
		 DB::table('posts')->where('power_account_idpower_account',$id)->get();
		 //return view
	}
	
	public function publishPost($id,$foods = null)
	{
		/*
		 * Allows a post to be sent to the app users' feed with tantamount limit of which the can send,
		 * like sending out flyers then running out flyers to give
		 *
		 */
		 //select a post
		 //get post_limit
		 //compare with number of the post to be sent
		 //check if still able to send by comparing post_limit and last_publish
		 //if last_publish valid, reset post_limit then send
		 //return view of the status of the post
	}
	
	
}
