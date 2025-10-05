<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMessageMail;
use DB;
use Mail;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;

class FrontendController extends Controller
{
    public function home(){
        return view('frontend.home.index');

    }
    public function privacyPolicy(){
        return view('frontend.privacypolicy.index');
    }
    public function aboutUs(){
        return view('frontend.about-us.index');
    }
    public function termsCondition(){
        return view('frontend.termscondition.index');
    }
    public function blogs(){
        $alldata=DB::table('blogs')->where('is_deleted',0)->where('status',1)->select(['title','slug','category_id','id','image','tag','created_at'])->paginate(10);
        $allCategory=DB::table('blogs_category')->select(['name','id'])->get();
        $allTags=DB::table('blog_tags')->select(['name','id'])->get();
        $mostViewPost=DB::table('blogs')->orderBy('view','DESC')->limit(5)->where('is_deleted',0)->where('status',1)->select(['title','created_at','slug','category_id','id','image','tag'])->get();
        return view('frontend.blogs.index',compact('alldata','allCategory','mostViewPost','allTags'));
    }
    public function blogsDetails($slug){

        $data=DB::table('blogs')->where('slug',$slug)->first();
         $allCategory=DB::table('blogs_category')->select(['name','id'])->get();
        $allTags=DB::table('blog_tags')->select(['name','id'])->get();
        $mostViewPost=DB::table('blogs')->orderBy('view','DESC')->limit(5)->where('is_deleted',0)->where('status',1)->select(['title','created_at','slug','category_id','id','image','tag'])->get();
        return view('frontend.blogs.details',compact('data','allCategory','mostViewPost','allTags'));
    }
    public function faq(){
        return view('frontend.faq.index');
    }
    public function contactUs(){
        return view('frontend.contact-us.index');
    }
    public function contactStore(Request $request){

    // Validate and insert data into DB
       $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'message' => 'required|string',
    ]);

    // Insert into DB and get ID
    $id = DB::table('contact')->insertGetId($data);

    // Retrieve the inserted data
    $contact = DB::table('contact')->where('id', $id)->first();

    // Send email
    Mail::to('ashiffoysal8818@gmail.com')->send(new ContactMessageMail($contact));

   return back()->with('success', 'Your message has been sent successfully!');


    }
    public function GetFreeResources(){
        return view('frontend.getfreeresources.index');
    }


    public function boardWiseSubject($exam_type,$exam_board){

        if($exam_type==1){
            $type='A Level';
            $allsubject=DB::table('subjects')->where('exam_type','A Level')->where('exam_board',$exam_board)->get();
        }
        if($exam_type==2){
            $type='AS Level';
            $allsubject=DB::table('subjects')->where('exam_type','AS Level')->where('exam_board',$exam_board)->get();
        }
        if($exam_type==3){
            $type='GCSE';
            $allsubject=DB::table('subjects')->where('exam_type','GCSE')->where('exam_board',$exam_board)->get();
        }
        if($exam_type==4){
            $type='IGCSE';
            $allsubject=DB::table('subjects')->where('exam_type','IGCSE')->where('exam_board',$exam_board)->get();
        }

        return view('frontend.allboardsubject.index',compact('allsubject','exam_board','type'));
    }

    public function subjectExamExampaper($subject_id){

        $subject=DB::table('subjects')->where('id',$subject_id)->first();
        $alldata=DB::table('myallfiles')->where('subject',$subject_id)->get();
        return view('frontend.paper.index',compact('alldata','subject'));

    }

    public function examBoard($exam_type){
        $exam=DB::table('exam_types')->where('id',$exam_type)->first();

        $allboards=DB::table('exam_board')->where('exam_type',$exam_type)->get();

        return view('frontend.myborad.index',compact('allboards','exam'));
    }



    //
    public function pastpaperAqa(){
        return view('frontend.pastpaper.aqa');
    }
    public function pastpaperEdexcel(){
        return view('frontend.pastpaper.edexcel');
    }
    public function pastpaperOcr(){
        return view('frontend.pastpaper.ocr');
    }
    public function pastpaperWjec(){
        return view('frontend.pastpaper.wjec');
    }

    public function pastpapersSubject($slug){
        // return $slug;
        $subject=DB::table('subjects')->where('slug',$slug)->first();
        $alldata = DB::table('past_papers')
        ->join('series', 'past_papers.year', '=', 'series.id')
        ->select('past_papers.id', 'past_papers.name', 'past_papers.subject', 'past_papers.ques_link','past_papers.ans_link','series.name as series_name')
        ->where('past_papers.subject', $subject->id)
        ->groupBy('past_papers.id', 'past_papers.name', 'past_papers.subject', 'past_papers.ques_link','past_papers.ans_link','series.name')
        ->get();

        // dd($alldata);
        return view('frontend.pastpaper.papers',compact('alldata','slug','subject'));
    }
}
