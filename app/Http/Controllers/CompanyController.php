<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class CompanyController extends Controller
{
    public function getCompanyList()
    {
    	$data=DB::table('company')->select('id','name')->get();

    	return $data;

    }

    public function getCompanyDetail(Request $request)
    {

    	$id=$request->get('cid');
    	$data=DB::table('company')->select('*')->where('id','=',$id)->get();
    	return $data;
    }

    public function applyToCompany(Request $request)
    {
    	$cid=$request->get('cid');
    	$enumber=$request->get('enumber');
    	$data=DB::table('application')->insert(['cid'=>$cid,'enumber'=> $enumber]);
    	return (string )$data;
    }
}
