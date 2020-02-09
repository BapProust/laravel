<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		//$this->call(SkillsTableSeeder::class);
		/*$skills = App\Skill::all();
		factory(App\User::class, 50)->create()->each(function($u) use ($skills){

			$skillSet = $skills->random(rand(1,1));
			foreach($skillSet as $skill) {
				$u->skills()->attach($skill->id, ['level' => rand(1,5)]);
			}
		});*/
		$skills = App\Skill::all();
		foreach(App\User::all() as $user) {
			$skillSet = $skills->random(rand(1,4));
			foreach($skillSet as $skill) {
				DB::table('skill_user')->insert(['user_id' => $user->id, 'skill_id' => $skill->id, 'level' => rand(1, 5)]);
			}
		}
	}
}
