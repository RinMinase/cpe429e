<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AdminCheck
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		/*
        $id = Auth::user()->id;
		$user = DB::table('admin_account')->where('users_id',$id)->get();
		
		if(count($user) <= 0)
		{
			return view('welcome');
		}
		*/
        return $next($request);
    }

}