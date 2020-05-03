<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;
use Illuminate\Support\Facades\Storage;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;

class ImportController extends Controller
{
    public function import(Request $request){
        // dd('entrou',$request->all());
        $saveFile = $this->saveFile($request);
        // dd($saveFile);
        $data = $this->loadExcel($saveFile);
    }

    public function saveFile($request){
        Storage::makeDirectory("/csv");
        $path = $request->file('csv')->store("/csv");
        return empty($path) ? false : $path;
    }

    public function loadExcel($saveFile){
        $record = [];
        set_time_limit(0);
        $getFile = Storage::path($saveFile);
        $load = Excel::import(new UsersImport , $getFile);
        dd($load);

    }
}
