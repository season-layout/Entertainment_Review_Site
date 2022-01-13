<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/login.css">
<link rel="stylesheet" href="css/background.css">
<!-- @extends('layouts.app') -->
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
                                <a href="/register">ユーザーを登録する</a>
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
                    <!-- <div class="card-header">{{ __('Login') }}</div> -->
                    <h1 class="section-title">ログイン</h1>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <!-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif -->
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

</div>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="js/background.js"></script>
@endsection