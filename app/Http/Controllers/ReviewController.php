<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Review;
use App\Models\Work;
use App\Models\User;

class ReviewController extends Controller
{
    /**
     * 
     * レビュー一覧ページへ遷移
     * 
     * @param Request  $request
     * @return Response
     */
    public function move(Request $request){

        $work_id = $request['work_id'];
        // dd($work_id);

        // $work = Work::where('id',$work_id)->get();
        $work = Work::find($work_id);

        $review = Review::where('work_id',$work_id)->get();
        // $avg_grade = $work->reviews()->avg('review_grade'); 
        $avg_grade = $review->avg('review_grade'); 
        
        $view = view('entame.review');
        $view->with('work', $work);
        $view->with('avg_grade', $avg_grade);

        return $view;
    }

    /**
     * レビュー投稿機能
     * 
     * @param Request  $request
     * @return Response
     * 
     */
    public function store(Request $request){

        if(empty($request['review_comment'])){
            $error['review_comment']="blank";
            // return redirect()->route('review.move');
            return redirect()->route('entame.toppage');
        }

        if(empty($error)){
            $review = $request->all();
            $review['user_id'] = Auth::id();

            Review::create($review);

            // $work = Work::find($request['work_id']);
            // $work_id = $request['work_id'];

            // return redirect()->route('review.move')->with('work_id', $work_id);
            return redirect()->route('entame.toppage')->with('success', '登録が完了しました');
        }
    }
}
