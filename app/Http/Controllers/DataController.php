<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;
use App\Models\dataModel;

class DataController extends Controller
{
  function index(){
    return view('dataset');
  }

  function getDataInToTable(Request $request){
      if($request->ajax()){
        $data =new dataModel();
        $data =DB::table('data_models');
        return DataTables::of($data)
          ->addIndexColumn()
          ->addColumn('action',function(){

          })
          ->rawColumns(['action'])
          ->make(true);
      }
  }

}
