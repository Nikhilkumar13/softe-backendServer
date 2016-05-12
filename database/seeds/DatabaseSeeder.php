<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            array(
              'name' => 'Nikhil',
              'department' => 'Computer Science',
              'pwd' => 'nikhil123',
              'id' => '2012cs10238'
              ),
            array(
                'name' => 'Rahul',
                'department' => 'Computer Science',
                'pwd' => 'rahul123',
                'id' => '2012cs10244'
                ),
            array(
                'name' => 'Tushar',
                'department' => 'Computer Science',
                'pwd' => 'rahul123',
                'id' => '2012cs10259'
                )
            ));



        DB::table('company')->insert(array(
            array(
                'name' => 'Google',
                'website' => 'www.google.com',
                'jnf' => 'Some random String asdn as daksl dlkas dnkas ldas dlnkans dklasmd lsamd askmd ask dmas lkdmas ldkma sdaknsd alks dkasl dkals ndklas dlkas ndkla sdkas ndlkas ndklas ds end',
                ),
            array(
                'name' => 'Facebook',
                'website' => 'www.Facebook.com',
                'jnf' => 'Some random String asdn as daksl dlkas dnkas ldas dlnkans dklasmd lsamd askmd ask dmas lkdmas ldkma sdaknsd alks dkasl dkals ndklas dlkas ndkla sdkas ndlkas ndklas ds end',
                ),
            array(
                'name' => 'CredR',
                'website' => 'www.CredR.com',
                'jnf' => 'Some random String asdn as daksl dlkas dnkas ldas dlnkans dklasmd lsamd askmd ask dmas lkdmas ldkma sdaknsd alks dkasl dkals ndklas dlkas ndkla sdkas ndlkas ndklas ds end',
                ),
            array(
                'name' => 'LinkedIn',
                'website' => 'www.LinkedIn.com',
                'jnf' => 'Some random String asdn as daksl dlkas dnkas ldas dlnkans dklasmd lsamd askmd ask dmas lkdmas ldkma sdaknsd alks dkasl dkals ndklas dlkas ndkla sdkas ndlkas ndklas ds end',
                ),array(
                'name' => 'Microsoft',
                'website' => 'www.Microsoft.com',
                'jnf' => 'Some random String asdn as daksl dlkas dnkas ldas dlnkans dklasmd lsamd askmd ask dmas lkdmas ldkma sdaknsd alks dkasl dkals ndklas dlkas ndkla sdkas ndlkas ndklas ds end',
                ),

                ));


        DB::table('application')->insert(array(
            array('cid'=> 1,
                'enumber'=>'2012cs10238'
                ),
            array('cid'=> 2,
                'enumber'=>'2012cs10238'
                ),
            array('cid'=> 3,
                'enumber'=>'2012cs10238'
                ),
            array('cid'=> 3,
                'enumber'=>'2012cs10244'
                ),
            array('cid'=> 1,
                'enumber'=>'2012cs10244'
                ),
            array('cid'=> 4,
                'enumber'=>'2012cs10244'
                ),
            array('cid'=> 1,
                'enumber'=>'2012cs10259'
                )
            ));

        DB::table('event')->insert(array(

            array('cid'=>1,
                'category'=>'Deadline',
                'description'=>'This is Company Deadline Event Intrested People can Apply',
                'venue'=>'',
                'time'=>"2016-5-12 06:39:05")
            ));
    }
}
