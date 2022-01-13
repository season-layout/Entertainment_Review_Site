<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>entame_review_touroku</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/touroku.css">
    <link rel="stylesheet" href="css/background.css">
</head>
<body>
    <div id="particles-js"></div>
    <div id="wrapper">
        @extends('layouts.app')


        <header>
                <div class="header-wrapper">
                    <h1 class="site-title">エンタメ作品 総合レビューサイト</h1>
                    <nav>
                        <ul class="nav-list">
                            <!-- <li>
                                <a href="/ranking">ランキング</a>
                            </li> -->
                            <!-- <li>
                                <a href="/toppage">トップページ</a>
                            </li>
                            <li>
                                <a href="/register_work">作品を登録する</a>
                            </li>
                            <li>
                                <a href="/register_review">レビューを投稿する</a>
                            </li> -->
                            <li>
                                <a href="/login">ログインする</a>
                            </li>
                            <!-- <li>
                                <a>ログアウトする</a>
                            </li> -->
                        </ul>
                    </nav>
                </div>
            </header>

        @section('content')
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <!-- <div class="card-header">{{ __('Register') }}</div> -->
                        <h1 class="section-title">会員登録</h1>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}" class="form">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            <!-- {{ __('Register') }} -->登録する
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
        <footer class="footer">
            <p>&copy;techis team 41</p>
        </footer>
        @endsection
    </div>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="js/background.js"></script>

</body>
</html>