<?php

namespace App\Http\Controllers;

//use Datatables;
use DB;
use App\Http\Requests;
use App\Barang;

class LaravelAjaxPagination extends Controller {
  protected function index()
  {
     return View('paginationajax');
    
  }
}