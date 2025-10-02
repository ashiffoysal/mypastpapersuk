<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class GetPaperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function GcseEdexcelmath(){
        $data=DB::table('myallfiles')->where('exam_type','GCSE')->orderBy('id','DESC')->limit(10)->get();
        return response()->json($data);
    }
    public function allGcse(){
        $data=DB::table('myallfiles')->where('exam_type','GCSE')->orderBy('id','DESC')->get();
        return response()->json($data);
    }

    public function allIGcse(){
        $data=DB::table('myallfiles')->where('exam_type','IGCSE')->orderBy('id','DESC')->get();
        return response()->json($data);
    }

    public function allAlevel(){
        $data=DB::table('myallfiles')->where('exam_type','A Level')->orderBy('id','DESC')->get();
        return response()->json($data);
    }

    public function allAslevel(){
        $data=DB::table('myallfiles')->where('exam_type','AS Level')->orderBy('id','DESC')->get();
        return response()->json($data);
    }
    
    public function AlevelSubject(){
        $data=DB::table('myallfiles')->where('exam_type','A Level')->orderBy('id','DESC')->limit(10)->get();
        return response()->json($data);
    }

}
