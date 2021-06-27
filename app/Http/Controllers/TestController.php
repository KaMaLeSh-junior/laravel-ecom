<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\TestModel;

use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //

    public function values()
    {
     $datas = TestModel::get();
     return view('test',compact('datas'));
    }
}
