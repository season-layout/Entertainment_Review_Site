<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entame_review_ranking</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/ranking.css">
</head>
<body>
    <!-- header -->
    <header>
        <div class="header-wrapper">
            <h1 class="site-title">entame-review</h1>
            <nav>
                <ul class="nav-list">
                    <li>
                        <a href="/toppage">トップページ</a>
                    </li>
                    <li>
                        <a href="/mypage">マイページ</a>
                    </li>
                    <li>
                        <a href="/register_work">作品を登録する</a>
                    </li>
                    <!-- <li>
                        <a href="/register_review">レビューを投稿する</a>
                    </li> -->
                    <li>
                        <a>ログアウトする</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- main -->
    <main>
        <h2 class="page-title">ランキング</h2>

        <div class="ranking-wrapper">
            <div class="ranking-list">
                <div class="ranking-category">
                    <h3 class="production-type">映画</h3>
                    <div class="ranking">
                        <div class="ranking-inner">
                            <img src="{{ asset('img/movie-pai.jpeg')}}" class="production-img">
                            <p class="production-title">π（パイ）</p>
                            <div class="star-list">
                            <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            </div>
                        </div>

                        <div class="ranking-inner">
                            <img src="{{ ('img/taiyou.jpg') }}" class="production-img">
                            <p class="production-title">太陽を盗んだ男</p>
                            <div class="star-list">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            </div>
                        </div>

                        <div class="ranking-inner">
                            <img src="{{ asset('img/hanabi.jpeg') }}" class="production-img">
                            <p class="production-title">HANABI</p>
                            <div class="star-list">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ranking-category">
                    <h3 class="production-type">小説</h3>
                    <div class="ranking">
                        <div class="ranking-inner">
                            <img src="{{ asset('img/sirano.jpg') }}"  class="production-img">
                            <p class="production-title">シラノ・ド・ベルジュラック</p>
                            <div class="star-list">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            </div>
                        </div>

                        <div class="ranking-inner">
                            <img src="{{ asset('img/mitunoaware.jpg') }}"  class="production-img">
                            <p class="production-title">蜜のあわれ</p>
                            <div class="star-list">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            </div>
                        </div>

                        <div class="ranking-inner">
                            <img src="{{ asset('img/shayou.jpeg') }}"  class="production-img">
                            <p class="production-title">斜陽</p>
                            <div class="star-list">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ranking-category">
                    <h3 class="production-type">音楽</h3>
                    <div class="ranking">
                        <div class="ranking-inner">
                            <img src="{{ asset('img/underworld.jpg') }}"  class="production-img">
                            <p class="production-title">Everything,Everything</p>
                            <div class="star-list">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            </div>
                        </div>

                        <div class="ranking-inner">
                            <img src="{{ asset('img/smashing-pumpkins.jpeg') }}"  class="production-img">
                            <p class="production-title">siamese dream</p>
                            <div class="star-list">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            </div>
                        </div>

                        <div class="ranking-inner">
                            <img src="{{ asset('img/kohh.jpeg') }}"  class="production-img">
                            <p class="production-title">UNTITLED</p>
                            <div class="star-list">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                                <img src="{{ asset('img/star_icon_empty.png') }}" width="30px" height="30px">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- footer -->
    <footer class="footer">
        <p>&copy;techis team 41</p>
    </footer>
</body>
</html>