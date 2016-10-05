<?php

namespace App\Http\Controllers;

//use Datatables;
use DB;
use App\Http\Requests;
use App\Barang;

class ProductListController extends Controller
{
    public function productList(Request $request){
        
        $barangs = DB::table('barangs')->paginate(5);
        //$barangs = Product::paginate(5);

        if ($request->ajax()) {
            return view('presult', compact('barangs'));
        }
        return view('productlist',compact('barangs'));
        //return view("tes");
    }
}
