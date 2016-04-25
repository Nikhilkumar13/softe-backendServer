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
        $users = DB::table('users')->where('enumber', '=', $enumber)->where('pwd', '=' ,$pwd)->count();

          return $users;

     }


     public function getUserData(Request $request)
     {
        $enumber=$request->get('enumber');
        $data=DB::table('users')->select('name','department')->where('enumber','=',$enumber)->get();
        return $data;
     }

     public function getUserApplication(Request $request)
     {
        $data=  (string) User::find($request->get('enumber'))->getUserApplication;
        // $data=DB::table('users')->select('cid','department')->where('enumber','=',$enumber)->get();
        return $data;
     }
}
