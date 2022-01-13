<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entame_review_register</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/background.css">
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
                        <!-- <li>
                            <a href="/register_review">レビューを投稿する</a>
                        </li> -->
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                ログアウトする
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- main -->
        <main>
            <div class="form-wrapper">
                <form method="POST" action="{{ route('entame.storeWork')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="production">
                        <!-- <label class="production-img">
                            ファイルを選択 -->
                        <div class="img-wrapper">
                            <input type="file" name="work_image" class="production-img" accept="image/png, image/jpeg">
                        <!-- </label> -->
                        </div>

                        <div class="production-detail">
                            <input type="text" name="work_name" placeholder="作品タイトルを入力" class="title">
                            <div class="radio-btn">
                                <span>作品形式：</span>
                                <input type="radio" name="work_category_id"  value="1" class="type">映画
                                <input type="radio" name="work_category_id"  value="2" class="type">小説
                                <input type="radio" name="work_category_id"  value="3" class="type">音楽
                            </div>
                            <ul class="creater-list">
                                <li>
                                    <input type="text" name="work_description" placeholder="作品の詳細" class="role">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <input type="submit" name="btn" value="作品を登録する" class="btn">
                </form>
            </div>
        </main>
    </div>

    <!-- footer -->
    <footer class="footer">
        <p>&copy;techis team 41</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/background.js"></script>

</body>
</html>