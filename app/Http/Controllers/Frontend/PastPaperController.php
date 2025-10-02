<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class PastPaperController extends Controller
{
    public function pastpaper(){
        $allCategory=DB::table('categories')->get();
        return view('frontend.pastpaper.index',compact('allCategory'));
    }

    public function pastpaperCategory($slug){

      $category=DB::table('categories')->where('slug',$slug)->select(['id','category_name','slug'])->first();
      $SubCategory=DB::table('sub_categories')->where('category_id',$category->id)->select(['id','subcategory_name','slug'])->orderBy('subcategory_name', 'ASC')->where('is_deleted',0)->where('is_active',1)->get();
      return view('frontend.pastpaper.subjects',compact('category','SubCategory'));

    }

    public function pastpaperBoard($id){
        $SubCategory=DB::table('sub_categories')->where('id',$id)->select(['id','subcategory_name','slug'])->first();
        $allBoard=DB::table('resubcategories')->where('subcategory_id',$SubCategory->id)->select(['id','resubcategory_name','slug'])->orderBy('resubcategory_name', 'ASC')->where('is_deleted',0)->where('is_active',1)->get();
        return view('frontend.pastpaper.boards',compact('SubCategory','allBoard'));
    }

    public function pastpaperPaper($id){

      // $pastpapers = DB::table('past_papers')
      // ->leftJoin('past_paper_years', 'past_papers.id', '=', 'past_paper_years.id')
      // ->where('past_papers.resubcategory', $id)
      // ->where('past_papers.is_deleted', 0)
      // ->where('past_papers.is_active', 1)
      // ->select(
      //     'past_papers.id',
      //     'past_papers.title',
      //     'past_papers.ques_paper',
      //     'past_papers.ans_paper',
      //     'past_papers.category',
      //     'past_papers.subcategory',
      //     'past_papers.resubcategory',
      //     'past_papers.exam_series',
      //     DB::raw('GROUP_CONCAT(past_paper_years.id ORDER BY past_paper_years.name ASC) as years') /
      // )
      // ->groupBy('past_papers.id', 'past_papers.title', 'past_papers.ques_paper', 'past_papers.ans_paper', 'past_papers.category', 'past_papers.subcategory', 'past_papers.resubcategory', 'past_papers.exam_series')
      // ->orderBy('past_papers.exam_series', 'ASC')
      // ->get()
      // ->groupBy('exam_series');

      $resubcategory = DB::table('resubcategories')
      ->join('categories', 'resubcategories.category_id', '=', 'categories.id')
      ->join('sub_categories', 'resubcategories.subcategory_id', '=', 'sub_categories.id')
      ->where('resubcategories.id', $id)
      ->select(
          'resubcategories.*',
          'categories.category_name',
          'sub_categories.subcategory_name'
      )
      ->first();


      $pastpapers = DB::table('past_papers')
    ->join('past_paper_years', 'past_papers.exam_series', '=', 'past_paper_years.id')
    ->where('past_papers.resubcategory', $id)
    ->where('past_papers.is_deleted', 0)
    ->where('past_papers.is_active', 1)
    ->select(
        'past_paper_years.name',
        'past_papers.id',
        'past_papers.title',
        'past_papers.ques_paper',
        'past_papers.ans_paper',
        'past_papers.category',
        'past_papers.subcategory',
        'past_papers.resubcategory'
    )
    ->orderBy('past_paper_years.name', 'ASC')
    ->get()
    ->groupBy('name'); // group by series name


        return view('frontend.pastpaper.papers',compact('pastpapers','resubcategory'));
    }



}
