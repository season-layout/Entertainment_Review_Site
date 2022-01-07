<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entame_review_toppage</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/toppage.css">
    <link rel="stylesheet" href="css/background.css">
  
     <!-- <link rel="stylesheet" href="https://use.typekit.net/zut3kib.css"> -->
</head>
<body>
    <div id="particles-js"></div>
    <div id="wrapper">
        <header>
            <div class="header-wrapper">
                <h1 class="site-title">エンタメ作品 総合レビューサイト</h1>
                <nav>
                    <ul class="nav-list">
                        <!-- <li>
                            <a href="/ranking">ランキング</a>
                        </li> -->
                        <li>
                            <a href="{{ route('entame.mypage') }}">マイページ</a>
                        </li>
                        <li>
                            <a href="{{ route('entame.register') }}">作品を登録する</a>
                        </li>
                        <!-- <li>
                            <a href="/register_review">レビューを投稿する</a>
                        </li> -->
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
        <main>
            <div class="TopPage-wrapper">
                <h2 class="section-title">作品一覧</h2>
                <div class="top-review-list">
                    @if(!empty($works))
                    @foreach($works as $key => $work)
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
                                <h3 class="work-title">
                                    {{ $work->work_name }}
                                </h3>
                                <div class="date-and-type">
                                    <p class="post-date">{{ $work->created_at }}</p>
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
                                    @if($avg_grade[$key] >= 1 and $avg_grade[$key] < 2 )
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                        {{ round($avg_grade[$key], 1) }}
                                    @elseif($avg_grade[$key] >= 2 and $avg_grade[$key] < 3)
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                        {{ round($avg_grade[$key], 1) }}
                                    @elseif($avg_grade[$key] >= 3 and $avg_grade[$key] < 4)
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                        {{ round($avg_grade[$key], 1) }} 
                                    @elseif($avg_grade[$key] >= 4 and $avg_grade[$key] < 5)
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                        {{ round($avg_grade[$key], 1) }}
                                    @elseif($avg_grade[$key] >= 5)
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        <img src="{{ asset('img/star.png') }}" width="30px" height="30px">
                                        {{ round($avg_grade[$key], 1) }}
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

                                <form class="review-button" method='post' action="{{ route('review.move') }}">
                                @csrf
                                    <input type="hidden" name="work_id" value="{{ $work->id }}">
                                    <input type="submit" value="この作品のレビュー一覧を見る">
                                </form>

                            </div>
                        </div>
                        @php
                        $num=0;
                        @endphp
                        @foreach($work->reviews as $review)
                        @if($num == 0)
                            <div class="production-review-wrapper">
                            <p class="production-review">{{ $review->review_comment }}</p>
                            </div>
                        @endif
                        @php
                        $num++;
                        @endphp
                        @endforeach
                    </div>
                    @endforeach
                    @endif

                    <!-- <div class="top-review-item">
                        <div class="production-detail">
                            <div class="top-review-img-wrapper">
                                <img src="{{ asset('img/movie-pai.jpeg') }}" alt="作品画像">
                            </div>
                            <div class="top-review-text">
                                <h3 class="work-title">π（パイ）</h3>
                                <div class="date-and-type">
                                    <p class="post-date">投稿日：2021/10/10</p>
                                    <p class="production-type">作品形式：映画</p>
                                </div>
                                <div class="review-stars">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                    <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                </div>
                                <ul class="producer-list">
                                    <li class="producer-item">
                                        <p>監督：ダーレン・アロノフスキー</p>
                                    </li>
                                    <li class="producer-item">
                                        <p>脚本：ダーレン・アロノフスキー</p>
                                    </li>
                                    <li class="producer-item">
                                        <p>制作：エリック・ワトソン</p>
                                    </li>
                                    <li class="producer-item">
                                        <p>主演：ショーン・ガレット</p>
                                    </li>
                                    <li class="producer-item">
                                        <p>
                                            音楽：クリント・マンセル , オービタル , エイフェックス・ツイン , 
                                        </p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="production-review-wrapper">
                            <p class="production-review">
                                有名なブラックスワンの監督の長編デビュー作。
                                全編モノクロの映像で、劇中のBGMもテクノで最高にカッコイイ！
                            </p>
                    </div> -->
                    
                </div>  
            </div>
        </main>
    </div>

    <footer class="footer">
        <p>&copy;techis team 41</p>
    </footer>
    
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/background.js"></script>
</body>
</html>
