<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\User;

class SkillsController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        return view('skills', compact('user'));
	}
	
	public function destroy($id, $i)
	{
		DB::table('skill_user')->where('user_id', $id)->where('skill_id', $i)->delete();
		return Redirect::back();
	}
	
	public function edit($id, $i, Request $request)
	{
		DB::table('skill_user')->where('user_id', $user->id)->where('skill_id', $i)
	}
}
