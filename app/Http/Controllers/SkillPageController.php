<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Redirect;
use App\Skill;

class SkillPageController extends Controller
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
        $skill = Skill::all();
        return view('skillPage', compact('skill'));
	}
	
	public function ajout(Request $request)
	{
		    DB::table('skills')->insert(['name' => $request -> skillName, 'description' => $request -> skillDesc]);
        return Redirect::back();
	}
 
   public function delete($id)
   {
       DB::table('skills')->where('id', $id)->delete();
       DB::table('skill_user')->where('skill_id', $id)->delete();
       return Redirect::back();
   }
	
}