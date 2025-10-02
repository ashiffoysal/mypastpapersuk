<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class ContactMessageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function store(Request $request){

        $insert=DB::table('contact')->insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message,
            'created_at'=>Carbon::now()->toDateTimeString(),
        ]);
        if($insert){
            return response()->json([
                'status'=>201,
                'message'=>'Message Insert Success',
            ]);
        }else{
            return response()->json([
                'status'=>401,
                'message'=>'Insert faild',
            ]);
        }


    }
}
