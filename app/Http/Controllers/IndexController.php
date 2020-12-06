<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function write(Request $request){



        $name = $request->input('name');
        $con = $request->input('con');
        
        if($name){
            Db::table('tables')->insert([
                'name'=>$name.'+'.$con,
            ]);
        }
    	return view('admin/index');
    }
}