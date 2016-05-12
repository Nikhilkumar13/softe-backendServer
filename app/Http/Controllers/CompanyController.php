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
}
