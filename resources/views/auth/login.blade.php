@extends('layouts.main')
@section('menu')
    @include('menu')
@endsection
@section('content')
    <div class="pink-bg"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header pink-bg text-white">{{ __('Вход') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group row">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ /*old('email')*/ 'stasya0903@mail.ru'}}" required
                                           autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-right">{{ __('Пароль') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password"
                                           value="{{ /*old('email')*/ '12345678'}}">

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
                                        <input class="form-check-input" type="checkbox" name="remember"
                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Запомнить меня') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="d-flex form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <p>Войти через</p>
                                    <ul class="media-social list-unstyled d-flex">
                                        <li class="socialMediaIcon">
                                            <a class="socialMediaIconLink" href="{{ route('loginSocial', 'google') }}">
                                                <span class="fab fa-google"></span>
                                            </a>
                                        </li>
                                        <li class="socialMediaIcon">
                                            <a class="socialMediaIconLink" href="{{ route('loginSocial', 'github') }}">
                                                <span class="fab fa-github"></span>
                                            </a>
                                        </li>
                                        <li class="socialMediaIcon">
                                            <a class="socialMediaIconLink"
                                               href="{{ route('loginSocial', 'vkontakte') }}">
                                                <span class="fab fa-vk"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-outline-secondary pink-bgHover">
                                        {{ __('Войти') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link hoverYellow grey" href="{{ route('password.request') }}">
                                            {{ __('Забыли пароль?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

