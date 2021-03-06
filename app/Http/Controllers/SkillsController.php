<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\User;
use App\Skill;
use App\SkillUser;

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
        
        $skills = Skill::all();        
        return view('skills', ['skills' => $skills, 'user' => $user]);
	}
	
	public function destroy($id, $id_comp)
	{
		DB::table('skill_user')->where('user_id', $id)->where('skill_id', $id_comp)->delete();
		return Redirect::back();
	}
	
	public function edit($id, $id_comp, Request $request)
	{
		DB::table('skill_user')->where('user_id', $id)->where('skill_id', $id_comp)->update(['level' => $request->skillLevel]);
		return Redirect::back();
	}
	
	public function deleteUser($id)
	{
		DB::table('users')->where('id', $id)->delete();
		return Redirect::back();
	}
 
   public function ajout($id, Request $request)
   {
     DB::table('skill_user')->insert(['user_id' => $id, 'skill_id' => $request -> skillName, 'level' => $request -> skillLvl]);
     return Redirect::back();
   }
}
