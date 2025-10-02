<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Auth;
use Carbon\Carbon;

class PastPaperController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // Get Subjects
    public function getSubject($exam_type,$board){
        $data=DB::table('subjects')->where('board',$board)->where('exam_type',$exam_type)->get();
        return response()->json($data);
    }
}
