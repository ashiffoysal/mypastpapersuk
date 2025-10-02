<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function blogCreate(){
       $allCategory=DB::table('blog_category')->get();
        return view('backend.blog.create',compact('allCategory'));
    }
    public function blogIndex(){
        $allData=DB::table('blog')->get();
        return view('backend.blog.index',compact('allData'));
    }
    public function blogStore(Request $request){
        $insert=DB::table('blog')->insertGetId([
            'title'=>$request->title,
            'blog_category'=>$request->blog_category,
            'short_description'=>$request->short_description,
            'long_description'=>$request->long_description,
            'tags'=>$request->tags,
            'created_at'=>Carbon::now()->todateTimeString(),
        ]);
       
        if($insert){
            Alert::success('Congratulation', 'Congratulation Blog Uploaded');
            return redirect()->back();
        }else{
            Alert::warning('Opps!', 'Uploaded Failed');
            return redirect()->back();
        }
    }

    public function blogEdit($id){
        $data=DB::table('blog')->where('id',$id)->first();
        $allCategory=DB::table('blog_category')->get();
        return view('backend.blog.update',compact('data','allCategory'));

    }
    public function blogUpdate(Request $request){
        $insert=DB::table('blog')->where('id',$request->id)->update([
            'title'=>$request->title,
            'blog_category'=>$request->blog_category,
            'short_description'=>$request->short_description,
            'long_description'=>$request->long_description,
            'tags'=>$request->tags,
        ]);
       
        if($insert){
            Alert::success('Congratulation', 'Congratulation Blog Uploaded');
            return redirect()->back();
        }else{
            Alert::warning('Opps!', 'Uploaded Failed');
            return redirect()->back();
        }
    }
    public function blogDelete($id){
        $delete=DB::table('blog')->where('id',$id)->delete();
        if($delete){
            Alert::success('Congratulation', 'Congratulation Blog Uploaded');
            return redirect()->back();
        }else{
            Alert::warning('Opps!', 'Uploaded Failed');
            return redirect()->back();
        }

    }
}
