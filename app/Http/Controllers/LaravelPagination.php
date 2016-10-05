<?php

namespace App\Http\Controllers;

//use Datatables;
use DB;
use App\Http\Requests;
use App\Barang;

class LaravelPagination extends Controller {
	protected function index()
	{
      	$per_page=1;
        $data= DB::table('barangs')->paginate($per_page);
        return View('pagination',compact('data'));
	}
}