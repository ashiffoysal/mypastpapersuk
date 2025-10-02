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
       $allCategory=DB::table('blogs_category')->get();
        return view('backend.blog.create',compact('allCategory'));
    }
    public function blogIndex(){
        $allData=DB::table('blogs')->paginate(10);
        return view('backend.blog.index',compact('allData'));
    }
    public function blogStore(Request $request){

        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',

        ]);
        $proname = $request->title;
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $proname);
        $insert = DB::table('blogs')->insertGetId([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'tag' => $request->tags,
            'slug' => $slug,
            'image' => '',
            'created_at' => Carbon::now()->toDateTimeString(),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'Blog' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/' . $ImageName);
           DB::table('blogs')->where('id', $insert)->update([
                'image' => $ImageName,
            ]);
        }

        if ($insert) {
            $notification = array(
                'messege' => 'Insert success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'insert Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }

    public function blogEdit($id){
        $data=DB::table('blogs')->where('id',$id)->first();
        $allCategory=DB::table('blogs_category')->get();
        return view('backend.blog.update',compact('data','allCategory'));

    }
    public function blogUpdate(Request $request){

        $validated = $request->validate([
            'title' => 'required',
            'category' => 'required',
        ]);
        $proname = $request->title;
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $proname);
        $insert = DB::table('blogs')->where('id',$request->id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category,
            'tag' => $request->tags,
            'slug' => $slug,
            'updated_at' => Carbon::now()->toDateTimeString(),
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ImageName = 'Blog' . '_' . time() . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('uploads/' . $ImageName);
            DB::table('blogs')->where('id', $request->id)->update([
                'image' => $ImageName,
            ]);
        }

        if ($insert) {
            $notification = array(
                'messege' => 'Update success!',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Update Faild!',
                'alert-type' => 'error'
            );
            return redirect()->back()->with($notification);
        }
    }
    public function blogDelete($id){
        $delete=DB::table('blogs')->where('id',$id)->delete();
        if($delete){
            Alert::success('Congratulation', 'Congratulation Blog Uploaded');
            return redirect()->back();
        }else{
            Alert::warning('Opps!', 'Uploaded Failed');
            return redirect()->back();
        }

    }
}
