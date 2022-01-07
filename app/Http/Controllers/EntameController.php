<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Review;
use App\Models\Work;
use App\Models\User;

class EntameController extends Controller
{
    /**
     * トップページへ遷移
     * 
     * @return Response
     */
    public function toppage()
    {   
        $works = Work::all();

        $ids = Work::get(['id']);
        // dd($ids);
        // return;

        // $reviews = Work::with('reviews')->latest()->first();
        // $reviews = Work::with('reviews')->get();
        // $reviews = Review::where('work_id', $work_id)->first();

        // dd($reviews);
        // return;
        $avg_grade = [];
        foreach($ids as $id){

            // dd($id);
            // $avg_grade = Review::where('work_id',$id)->avg('review_grade');
            $reviews = Review::where('work_id',$id->id)->get();
            // dd($reviews);
            $avg_grade[] = collect($reviews)->avg('review_grade');
            
        }
        // dd($avg_grade);

        $view = view('entame.toppage');

        $view->with('works', $works );
        $view->with('avg_grade', $avg_grade);
        // $view->with('reviews', $reviews );

        return $view;
    }

    /**
     * マイページへ遷移
     * 
     * @return Response
     */
    public function mypage()
    {
        $id = Auth::id();
        // var_dump($id);
        // $user = new User();
        $user = Auth::user();

        $reviews = Review::where('user_id',$id)->get();
        // $work_name = 
        // $reviews = $user->reviews();
        // dd($reviews);

        $view = view('entame.mypage');

        $view->with('reviews', $reviews );
        // $view->with('work_name', $work_name );
        $view->with('user', $user );
        
        $work_count = Work::where('user_id',$id)->count();
        $review_count = Review::where('user_id',$id)->count();

        $view->with('work_count', $work_count);
        $view->with('review_count', $review_count);

        return $view;
    }

    /**
     * 作品投稿ページへ遷移
     * 
     * @return Response
     */
    public function register()
    {
        return view('entame.register');
    }

    /**
     * 作品投稿機能
     *
     * @param Request  $request
     * @return Response
     */
    public function storeWork(Request $request)
    {   
        if(empty($request['work_name'])){
            $error['work_name']="blank";
            return redirect()->route('entame.register');
        }
        if(empty($request['work_category_id'])){
            $error['work_category=id']="blank";
            return redirect()->route('entame.register');
        }

        if(empty($error)){
            $request->validate([
                'work_image' => 'mimes:png,jpeg'
            ]);

            // required|file|work_image|

            $work_image = $request->file('work_image');
        
            if($work_image) {
                //アップロードされた画像を保存する
                $path = $work_image->store('uploads',"public");

                //画像の保存に成功したらDBに記録する
                if($path){
                    Work::create([
                        'work_name' => $request['work_name'],
                        'work_category_id' => $request['work_category_id'],
                        'work_description' => $request['work_description'],
                        'work_image' => $path,
                        'user_id' => Auth::id()
                    ]);
                }

                return redirect()->route('entame.toppage')->with('success', '登録が完了しました');

            }else{

                $work = $request->all();
                $work['user_id'] = Auth::id();

                Work::create($work);

                return redirect()->route('entame.toppage')->with('success', '登録が完了しました');

            }
        }
    }
}