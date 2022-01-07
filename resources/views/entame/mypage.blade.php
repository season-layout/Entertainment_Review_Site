<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entame_review_mypage</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/mypage.css">
    <link rel="stylesheet" href="css/background.css">
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
                            <a href="{{ route('entame.toppage') }}">トップページ</a>
                        </li>
                        <li>
                            <a href="{{ route('entame.register') }}">作品を登録する</a>
                        </li>
                        <!-- <li>
                            <a href="">レビューを投稿する</a>
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
            <div class="user-info">
                <h2 class="section-title">会員名:{{ $user->name }}</h2>
                <p class="username-kana"></p>
            </div>

            <ul class="number-list">
                <li class="list-item">
                    <p class="review-number">投稿したレビュー数</p>
                    <p class="number">{{ $review_count }}</p>
                </li>
                <li class="list-item">
                    <p class="register-number">登録した作品数</p>
                    <p class="number">{{ $work_count }}</p>
                </li>
            </ul>

            
            <div class="review-list-wrapper">
                <h2 class="section-title">あなたが投稿したレビュー</h2>
                <ul class="review-list">
            @if(!empty($reviews))
            @foreach($reviews as $review)
                    <li>
                        <h3 class="production-title">{{ $review->work->work_name }}</h3>
                        <div class="star-list">
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
                        <p class="review">
                            {{ $review->review_comment }}
                        </p>
                    </li>
            @endforeach
            @endif

                    <!-- <li>
                        <h3 class="production-title">作品タイトル</h3>
                        <div class="star-list">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                        </div>
                        <p class="review">
                            ---------------------------------
                            ---------------------------------
                            ---------------------------------
                        </p>
                    </li>

                    <li>
                        <h3 class="production-title">作品タイトル</h3>
                        <div class="star-list">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                        </div>
                        <p class="review">
                            ---------------------------------
                            ---------------------------------
                            ---------------------------------
                        </p>
                    </li>

                    <li>
                        <h3 class="production-title">作品タイトル</h3>
                        <div class="star-list">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                        </div>
                        <p class="review">
                            ---------------------------------
                            ---------------------------------
                            ---------------------------------
                        </p>
                    </li>

                    <li>
                        <h3 class="production-title">作品タイトル</h3>
                        <div class="star-list">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                        </div>
                        <p class="review">
                            ---------------------------------
                            ---------------------------------
                            ---------------------------------
                        </p>
                    </li> -->
                </ul>
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