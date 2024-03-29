<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>{{ config('app.name', 'bwpcms') }}</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ asset('bwp/assets/css/app.min.css') }}">
  <link rel="stylesheet" href="{{ asset('bwp/assets/bundles/bootstrap-social/bootstrap-social.css') }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('bwp/assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('bwp/assets/css/components.css') }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ asset('bwp/assets/css/custom.css') }}">
  <link rel='shortcut icon' type='image/x-icon' href='{{ asset('bwp/assets/img/favicon.ico') }}' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>{{ __('Login') }}</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <div class="form-group">
                    <label for="email">{{ __('Email') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" tabindex="1" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">{{ __('Password') }}</label>
                      @if (Route::has('password.request'))
                      <div class="float-right">
                        <a href="{{ route('password.request') }}" class="text-small">
                            {{ __('Forgot Your Password?') }}
                        </a>
                      </div>
                      @endif
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" tabindex="2" required>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" {{ old('remember') ? 'checked' : '' }} tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">{{ __('Remember Me') }}</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                        {{ __('Login') }}
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{ asset('bwp/assets/js/app.min.js') }}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{ asset('bwp/assets/js/scripts.js') }}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('bwp/assets/js/custom.js') }}"></script>
</body>
</html>