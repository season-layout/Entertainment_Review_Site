<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entame_review_review</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="css/background.css">
    <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="raty-master/lib/jquery.raty.js"></script> -->
</head>
<body>

    <div id="particles-js"></div>
    <div id="wrapper">
    <!-- header -->
    <header>
        <div class="header-wrapper">
            <h1 class="site-title">エンタメ作品 総合レビューサイト</h1>
            <nav>
                <ul class="nav-list">
                    <!-- <li>
                            <a href="/ranking">ランキング</a>
                        </li> -->
                        <li>
                            <a href="{{ route('entame.toppage') }}">トップページ</a>
                        </li>
                        <li>
                            <a href="{{ route('entame.mypage') }}">マイページ</a>
                        </li>
                        <li>
                            <a href="{{ route('entame.register') }}">作品を登録する</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="http://127.0.0.1:8000/logout" 
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                                ログアウトする
                            </a>
                            <form id="logout-form" action="http://127.0.0.1:8000/logout" method="POST" class="d-none">
                                @csrf     
                            </form>
                        </li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- main -->
    <main>
        <div class="TopPage-wrapper">
            <!-- <h2 class="section-title">新着レビュー</h2> -->
            <div class="top-review-list">
                <div class="top-review-item">
                    <div class="production-detail">
                        <div class="top-review-img-wrapper">
                            @if(empty($work->work_image))
                                <img src="{{ asset('img/no-image.jpg') }}" alt="作品画像">
                            @else
                                <img src="{{ Storage::url($work->work_image) }}">
                            @endif
                        </div>
                        <div class="top-review-text">
                            <h3 class="work-title">{{ $work->work_name }}</h3>
                            <div class="date-and-type">
                                <!-- <p class="post-date">投稿日：2021/10/10</p> -->
                                <p class="production-type">作品形式：
                                    @if($work->work_category_id == 1)
                                        映画
                                    @elseif($work->work_category_id == 2)
                                        小説
                                    @elseif($work->work_category_id == 3)
                                        音楽
                                    @endif
                                </p>
                            </div>
                            <div class="review-stars">
                                @if($avg_grade >= 1 and $avg_grade < 2 )
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    {{ round($avg_grade, 1) }}
                                @elseif($avg_grade >= 2 and $avg_grade < 3)
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    {{ round($avg_grade, 1) }}
                                @elseif($avg_grade >= 3 and $avg_grade < 4)
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    {{ round($avg_grade, 1) }} 
                                @elseif($avg_grade >= 4 and $avg_grade < 5)
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    {{ round($avg_grade, 1) }}
                                @elseif($avg_grade >= 5)
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                    {{ $round($avg_grade, 1) }}
                                @else
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                @endif
                            </div>
                            <ul class="producer-list">
                                <li class="producer-item">
                                    <p>{{ $work->work_description }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr class="hr-text" data-content="この作品のレビューを投稿する">
                
                    <div class="form-wrapper">
                        <!-- <div class="title">{{ $work->work_name }}</div> -->
                        <form action="{{ route('review.store') }}" method="post">
                            @csrf
                            <!-- <p>作品の評価</p> -->
                            <div class="star-list">
                                <input class="star star-5" id="star-5-2" type="radio" name="review_grade" value="5"/>
                                <label class="star star-5" for="star-5-2" width="30px" height="30px"></label>
                                <input class="star star-4" id="star-4-2" type="radio" name="review_grade" value="4"/>
                                <label class="star star-4" for="star-4-2" width="30px" height="30px"></label>
                                <input class="star star-3" id="star-3-2" type="radio" name="review_grade" value="3"/>
                                <label class="star star-3" for="star-3-2" width="30px" height="30px"></label>
                                <input class="star star-2" id="star-2-2" type="radio" name="review_grade" value="2"/>
                                <label class="star star-2" for="star-2-2" width="30px" height="30px"></label>
                                <input class="star star-1" id="star-1-2" type="radio" name="review_grade" value="1" checked/>
                                <label class="star star-1" for="star-1-2" width="30px" height="30px"></label>
                            </div>
                            <textarea name="review_comment" class="textarea"></textarea> 
                            <input type="hidden" name="work_id" value="{{ $work->id }}">
                            <input type="submit" name="review-btn" value="投稿する" class="btn">
                        </form>
                    </div>
                    <hr class="hr-text" data-content="レビューの一覧">
                    
                    @foreach( $work->reviews as $review)
                        <div class="review_list1">
                            <div class="user_name1">{{ $review->user->name }}</div>
                            <div class="review_content1">
                                <div class="review_grade1">
                                @if($review->review_grade == 1 )
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            @elseif($review->review_grade == 2)
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            @elseif($review->review_grade == 3)
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            @elseif($review->review_grade == 4)
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            @elseif($review->review_grade == 5)
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                            @endif
                                </div>
                                <div class="review_comment1">{{ $review->review_comment }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        


            <!-- <div class="form-wrapper">
                <div class="title">{{ $work->work_name }}</div>
                <form action="{{ route('review.store') }}" method="post">
                    @csrf
                    <p>作品の評価</p>
                    <div class="star-list">
                        <input class="star star-5" id="star-5-2" type="radio" name="review_grade" value="5"/>
                        <label class="star star-5" for="star-5-2" width="30px" height="30px"></label>
                        <input class="star star-4" id="star-4-2" type="radio" name="review_grade" value="4"/>
                        <label class="star star-4" for="star-4-2" width="30px" height="30px"></label>
                        <input class="star star-3" id="star-3-2" type="radio" name="review_grade" value="3"/>
                        <label class="star star-3" for="star-3-2" width="30px" height="30px"></label>
                        <input class="star star-2" id="star-2-2" type="radio" name="review_grade" value="2"/>
                        <label class="star star-2" for="star-2-2" width="30px" height="30px"></label>
                        <input class="star star-1" id="star-1-2" type="radio" name="review_grade" value="1" checked/>
                        <label class="star star-1" for="star-1-2" width="30px" height="30px"></label>
                    </div>
                    <textarea name="review_comment" class="textarea"></textarea> 
                    <input type="hidden" name="work_id" value="{{ $work->id }}">
                    <input type="submit" name="review-btn" value="投稿する" class="btn">
                </form>
            </div> -->
        
            <!-- <div class="review_list1">
                <div class="user_name1">ukai</div>
                <div class="review_content1">
                    <div class="review_grade1">
                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                    </div>
                    <div class="review_comment1">aaaaaa</div>
                </div>
            </div> -->
        </div>

    </main>

    <!-- footer -->
    <footer class="footer">
        <p>&copy;techis team 41</p>
    </footer>

    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/background.js"></script>
</body>
</html>