<?php

namespace App\Http\Controllers\FoodaUser;

use DateTime;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
		//$this->middleware('admin');
		
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
	
	public function verifyAdmin()
	{
		$id = Auth::user()->id;
		$user = DB::table('admin_account')->where('users_id',$id)->get();
		
		if(count($user) <= 0)
		{
			return false;
		}
		else
		{
			return true;
		}
	}
	
	
	
	public function createUser()
	{
		/*
		 * Loads a page where the administrator can manually create an account
		 *
		 *
		 */
		 //create user
		 
	}
	
	public function viewAllUsers()
	{
		/*
		 * Loads a page where the administrator can view all existing users
		 *
		 *
		 */
		 //DB::table('users')->select('id')->addSelect('name')->addSelect('email')->addSelect('created_at')->get();
		 
		 
		$data['users'] = DB::table('users')
			->leftJoin('power_account','users.id','=','power_account.users_id')
			->select('users.id','users.name','users.email','users.created_at','power_account.idpower_account','power_account.brand','power_account.post_limit')
			->get(); //loads list of all users, but not all information
		/*
		foreach($data['users'] as $user):
			$check = DB::table('power_account')->select('name','post_limit')->where('users_id',$user->id)->first();
			if(count($check) > 0)
			{
				foreach($check as $r):
					$user->power_account = $r->name;
					$user->post_limit = $r->post_limit;
				endforeach;
			}
			else
			{
				$user->power_account = 'none';
				$user->post_limit = '0';
			}
		endforeach;
		*/
		
		if($this->verifyAdmin())
		{
			return view('fooda\admin\dashboard-admin-view',$data);  //return view
		}
		else
		{
			return view('welcome');
		}
		
		 
		 
		 //return view
	}
	
	public function viewAllPowerAccounts()
	{
		/*
		 * Loads a page where the administrator can view all existing power accounts
		 *
		 *
		 */
		 //loads all of the power accounts with their corresponding users name
		 
		$data['users'] = DB::table('power_account')
			->join('users','users.id','=','power_account.users_id')
			->select('power_account.idpower_account','power_account.brand','power_account.post_limit','users.id','users.name','users.email','users.created_at')
			->get();
		
		if($this->verifyAdmin())
		{
			return view('fooda\admin\dashboard-admin-stores',$data);
		}
		else
		{
			return view('welcome');
		}
		
		//return view
	}
	
	public function adminAdd()
	{
		if($this->verifyAdmin())
		{
			return view('fooda\admin\dashboard-admin-add');
		}
		else
		{
			return view('welcome');
		}
	}
	
	public function createPowerAccount($id)
	{
		if($id != null):
			$data['brand'] = Input::get('store-name','bob');
			$data['post_limit'] = Input::get('post-limit','200');
			$now = date('Y-m-d H:i:s');
			$data['created_at'] = $now;//->getTimestamp();
			$data['last_publish'] = $data['created_at'];
			$data['users_id'] = $id;
		
			DB::table('power_account')->insert($data);
		endif;
		
		return $this->viewAllUsers();
		//return redirect(url('/view/users'));
		
		/*
		 * Loads a page where administrator can add a power account for the user
		 *
		 *
		 */
		 //get all the info from view and store in array or something
		 /*
		 $data = [];
		 $submit = Input::input('create_power_account');
		 $account_name = Input::has('account_name') ? Input::get('account_name') : null;
		 $post_limit = Input::get('post_limit','200');
		 $created_at = time();
		 
		 if($submit != 'Submit')
		 {
			return view('fooda\admin\create_power_account',$data);  //return view to create account
		 }
		
		 $data = [
			'name' => $account_name,
			'post_limit' => $post_limit,
			'created_at' => $created_at,
			'last_publish' => $created_at
		 ];
		 
		 //create a power_account for a user using his/her id
		 DB::table('power_account')->insert($data);
		 */
		 //return view to list of power accounts
		 /*
		 $data = [];
		 return view('fooda\admin\view_users',$data);  //return view to create account
		 */
	}
	
	public function editPowerAccount($id = null)
	{
		/*
		 * Loads a page where the administrator can edit the profile and post limits of a power account
		 *
		 *
		 */
		 //update that sheet
	}
	
	public function viewAllPosts()
	{
		$data['posts'] = DB::table('posts')
			->join('power_account','posts.power_account_idpower_account','=','power_account.idpower_account')
			->select('posts.*','power_account.brand','power_account.banner','power_account.description')
			->orderBy('idposts','desc')
			->get();
		
		if($this->verifyAdmin())
		{
			return view('fooda\admin\dashboard-admin-posts',$data);
		}
		else
		{
			return view('welcome');
		}
		
	}
}
