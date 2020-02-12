
<?php

use Illuminate\Database\Seeder;

class SkillsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$data = array([
		'name'=>'Python',
		'description'=>'Langage de script Python',
		'logo'=>'python.png',
	], 
	[
		'name'=>'HTML/CSS',
		'description'=>'Langage de script HTML/CSS',
		'logo'=>'html.png',
	],
	[
		'name'=>'PHP',
		'description'=>'Langage PHP',
		'logo'=>'php.png',
	]);
	App\Skill::insert($data);
    }
}
