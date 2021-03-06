<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }



     public function isValid(Request $request)
     {
        $enumber=$request->get('enumber');
        $pwd=$request->get('pwd');
        // $user=0;
        $users = DB::table('users')->where('id', '=', $enumber)->where('pwd', '=' ,$pwd)->count();
        if ($users==1) {
            return 'true';
        }
        return 'false';

     }


     public function getUserData(Request $request)
     {
        $enumber=$request->get('enumber');
        $data=DB::table('users')->select('name','department')->where('id','=',$enumber)->get();
        return $data;
     }

     public function getUserApplication(Request $request)
     {
                $enumber=$request->get('enumber');

         $data=DB::table('application')->select('cid')->where('enumber','=',$enumber)->get();
        return $data;
     }
}
