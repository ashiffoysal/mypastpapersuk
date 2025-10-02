<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;


class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function homeBlog(){
        $data=DB::table('blog')->orderBy('id','DESC')->limit(4)->get();
        return response()->json($data);
    }

    public function Allblog(){
        $data=DB::table('blog')->orderBy('id','DESC')->get();
        return response()->json($data);
    }

    public function blogDetails($id){

        $data=DB::table('blog')->where('id',$id)->first();
        return response()->json([

            'status'=>200,
            'blodData'=>$data,
        ]);

    }
}
