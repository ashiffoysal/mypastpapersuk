<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;


class SubjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function allSubject(){
        $alldata = DB::table('subjects')
    ->join('exam_borad', 'subjects.board', '=', 'exam_borad.id') // Join with exam_board
    ->join('exam_type', 'subjects.exam_type', '=', 'exam_type.id') // Join with exam_type
    ->where('subjects.is_deleted', 0) // Filter subjects that are not deleted
    ->select('subjects.*', 'exam_borad.name as board_name', 'exam_type.name as exam_type_name') // Select relevant fields
    ->get();
        // dd($alldata);
        return view('backend.subject.index',compact('alldata'));
    }



    public function createSubject(){
        $allboard=DB::table('exam_borad')->get();
        return view('backend.subject.create',compact('allboard'));
    }


    public function StoreSubject(Request $request){

       
        $main_examtype=DB::table('exam_type')->where('name',$request->exam_type)->first();
        $main_examboard=DB::table('exam_borad')->where('id',$request->exam_board)->first();

        $nameslug=Str::slug($request->name, '-');

        $insert=DB::table('subjects')->insertGetId([
            'name'=>$request->name,
            'unit_code'=>$request->unit_code,
            'slug'=>$main_examtype->slug.'-'.$main_examboard->slug.'-'.$nameslug,
            'exam_type'=>$main_examtype->id,
            'board'=>$request->exam_board,
            'created_at'=>Carbon::now()->todateTimeString(),
        ]);
        if($insert){
            Alert::success('Congratulation', 'Congratulation File Uploaded');
            return redirect()->back();
        }else{
            Alert::warning('Opps!', 'Uploaded Failed');
            return redirect()->back();
        }
    

    }


    public function fileCreate(){
        $allSubject=DB::table('subjects')->where('is_deleted',0)->get();
        $allYear=DB::table('years')->get();
        return view('backend.filemanage.create',compact('allSubject','allYear'));
    }
    public function fileIndex(){
        $allData = DB::table('past_papers')
        ->join('exam_borad', 'past_papers.exam_board', '=', 'exam_borad.id')
        ->join('subjects', 'past_papers.subject', '=', 'subjects.id')
        ->join('years', 'past_papers.year', '=', 'years.id')
        ->join('exam_type', 'past_papers.exam_type', '=', 'exam_type.id')
        ->select(
            'past_papers.*',
            'exam_borad.name as exam_board_name',
            'exam_borad.slug as exam_board_slug',
            'subjects.name as subject_name',
            'subjects.unit_code as subject_unit_code',
            'subjects.board as subject_board',
            'years.name as year_name',
            'exam_type.name as exam_type_name',
            'exam_type.slug as exam_type_slug'
        )
        ->get();
    
        return view('backend.filemanage.index',compact('allData'));
    }
    public function fileStore(Request $request){
        $slug = Str::slug($request->name, '-');
        $mainSubject=DB::table('subjects')->where('id',$request->subject)->select(['slug','id'])->first();
        $insert=DB::table('past_papers')->insertGetId([
            'name'=>$request->name,
            'slug'=>$slug,
            'exam_type'=>$request->exam_type,
            'exam_board'=>$request->exam_board,
            'year'=>$request->year,
            'subject'=>$request->subject,
            'created_at'=>Carbon::now()->todateTimeString(),
        ]);
        if ($request->hasFile('ques_link')) {
            $photo =$request->file('ques_link');
            $name = $insert.'question_paper'.'-'.$mainSubject->slug.'-'.$slug.'.'.$photo->getClientOriginalExtension();
            $newfile =$photo->move('uploads/pastpapers', $name);
            DB::table('past_papers')->where('id',$insert)->update([
                'ques_link' => $name,
            ]);
    }
    if($request->hasFile('ans_link')) {
   
                $photos =$request->file('ans_link');
                $names =  $insert.'markscheme'.'-'.$mainSubject->slug.'-'.$slug.'.'.$photos->getClientOriginalExtension();
                $newfiles =$photos->move('uploads/pastpapers', $names);
                DB::table('past_papers')->where('id',$insert)->update([
                    'ans_link' => $names,
                ]);
        
    }
        if($insert){
            Alert::success('Congratulation', 'Congratulation File Uploaded');
            return redirect()->back();
        }else{
            Alert::warning('Opps!', 'Uploaded Failed');
            return redirect()->back();
        }
    }

    public function fileDelete($id){
        $data=DB::table('myallfiles')->where('id',$id)->delete();
        if($data){
            Alert::success('Congratulation', 'Delete Success');
            return redirect()->back();
        }else{
            Alert::warning('Opps!', 'Delete Faild');
            return redirect()->back();
        }
    }

    public function fileEdit($id){
        $allSubject=DB::table('subjects')->where('is_deleted',0)->get();
        $allYear=DB::table('years')->get();
        $data=DB::table('myallfiles')->where('id',$id)->first();
        return view('backend.filemanage.update',compact('data','allYear','allSubject'));
    }


    public function fileUpdate(Request $request){
        $insert=DB::table('myallfiles')->where('id',$request->id)->update([
            'name'=>$request->name,
            'exam_type'=>$request->exam_type,
            'board'=>$request->exam_board,
            'year'=>$request->year,
            'subject'=>$request->subject,
          
        ]);
        if ($request->hasFile('ques_link')) {
            $photo =$request->file('ques_link');
            $name = 'ques_link_'.time().'.'.$photo->getClientOriginalExtension();
            $newfile =$photo->move(public_path().'/uploads', $name);
            DB::table('myallfiles')->where('id',$request->id)->update([
                'ques_link' => 'uploads/'.$name,
            ]);
    }
    if($request->hasFile('ans_link')) {
   
                $photos =$request->file('ans_link');
                $names = 'ans_link_'.time().'.'.$photos->getClientOriginalExtension();
                $newfiles =$photos->move(public_path().'/uploads', $names);
                DB::table('myallfiles')->where('id',$request->id)->update([
                    'ans_link' => 'uploads/'.$names,
                ]);
        
    }
        if($insert){
            Alert::success('Congratulation', 'Congratulation File Updated');
            return redirect()->back();
        }else{
            Alert::warning('Opps!', 'Updated Failed');
            return redirect()->back();
        }
    }
}
