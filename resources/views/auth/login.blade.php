<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود به پنل سورا</title>
    <link rel="icon" href="{{ asset('sora/assets/img/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet">
    <link href="{{ asset('sora/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sora/assets/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('sora/assets/css/fonts.css') }}" rel="stylesheet">
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            background: radial-gradient(circle at top left, #0ea5e9 0, #020617 55%, #020617 100%);
            font-family: 'Vazirmatn', 'Tahoma', sans-serif;
        }
        .auth-split {
            min-height: 100vh;
        }
        .auth-image {
            background-image: url('{{ asset('sora/assets/img/full-screen-image-3.jpg') }}');
            background-size: cover;
            background-position: center;
            position: relative;
            min-height: 50vh;
        }
        .auth-image::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(15,23,42,0.75), rgba(8,47,73,0.4));
        }
        .auth-image-inner {
            position: relative;
            z-index: 1;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 2.5rem;
            color: #e5e7eb;
        }
        .auth-logo {
            font-size: 1.4rem;
            font-weight: 700;
            letter-spacing: .08em;
            text-transform: uppercase;
        }
        .auth-title {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: .75rem;
        }
        .auth-subtitle {
            font-size: .95rem;
            opacity: .9;
        }
        .auth-metrics {
            display: flex;
            gap: 1.5rem;
            flex-wrap: wrap;
            font-size: .8rem;
        }
        .auth-metric {
            background: rgba(15,23,42,0.85);
            border-radius: .75rem;
            padding: .75rem 1rem;
            box-shadow: 0 10px 25px rgba(15,23,42,0.7);
        }
        .auth-metric span:first-child {
            display: block;
            font-size: .75rem;
            opacity: .8;
        }
        .auth-metric span:last-child {
            display: block;
            font-size: 1.1rem;
            font-weight: 700;
        }
        .auth-form-wrapper {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            padding: 2.5rem 1.75rem;
            background: transparent;
        }
        .auth-form-card {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            border-radius: 1rem;
            box-shadow: 0 24px 80px rgba(15,23,42,0.35);
            padding: 2.25rem 2.25rem 2rem;
            color: #111827;
        }
        .auth-form-card h2 {
            font-size: 1.4rem;
            margin-bottom: .5rem;
        }
        .auth-form-card p {
            font-size: .85rem;
            color: #6b7280;
        }
        .input-group-text {
            background: #f3f4f6;
            border-color: #e5e7eb;
            color: #9ca3af;
        }
        .form-group label {
            font-size: .8rem;
            color: #6b7280;
        }
        .form-control {
            background: #f9fafb;
            border-color: #e5e7eb;
            color: #111827;
        }
        .form-control:focus {
            background: #ffffff;
            border-color: #0ea5e9;
            box-shadow: 0 0 0 0.2rem rgba(14,165,233,0.35);
            color: #111827;
        }
        .btn-primary {
            background: linear-gradient(135deg,#0ea5e9,#2563eb);
            border: none;
            box-shadow: 0 10px 30px rgba(37,99,235,0.4);
        }
        .btn-primary:hover {
            background: linear-gradient(135deg,#0284c7,#1d4ed8);
            box-shadow: 0 14px 40px rgba(37,99,235,0.55);
        }
        .small-link {
            font-size: .8rem;
            color: #0ea5e9;
        }
        @media (max-width: 767.98px) {
            .auth-form-wrapper {
                min-height: auto;
                padding-top: 2rem;
                padding-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
<div class="container-fluid auth-split">
    <div class="row no-gutters">
        <div class="col-lg-6 auth-image d-flex">
            <div class="auth-image-inner">
                <div>
                    <div class="auth-logo mb-2">
                        SORA CLINIC
                    </div>
                    <h1 class="auth-title">پنل هوشمند مدیریت مطب</h1>
                    <p class="auth-subtitle">
                        جریان‌کار روزانه مطب، از لحظه رزرو نوبت تا صدور نسخه و تسویه مالی، در یک داشبورد یکپارچه.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 auth-form-wrapper">
            <div class="auth-form-card">

                @if (session('error'))
                    <div class="alert alert-danger text-black">{{ session('error') }}</div>
                @endif

                @if ($errors->any())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger text-white">{{ $error }}</div>
                    @endforeach
                @endif
                <h2 class="mb-1">خوش آمدید</h2>
                <p class="mb-4">برای ورود به پنل مدیریت سورا، ایمیل و رمز عبور خود را وارد کنید.</p>
                <form method="POST" action="{{ route('loginMethod') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email">ایمیل</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                            <input type="email" name="email" id="email" class="form-control" placeholder="you@clinic.com">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password">رمز عبور</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <input type="password" name="password" id="password" class="form-control" placeholder="رمز عبور">
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-between align-items-center mb-3">
                        <a href="#" class="small-link text-info">فراموشی رمز عبور؟</a>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-round mb-2">
                        ورود به داشبورد
                    </button>
                    <div class="text-center small text-muted my-2">یا</div>
                    <button type="button" class="btn btn-light btn-block border d-flex align-items-center justify-content-center" style="gap:.5rem;">
                        <img src="https://www.gstatic.com/firebasejs/ui/2.0.0/images/auth/google.svg" alt="Google" style="width:18px;height:18px;">
                        <span>ورود با حساب گوگل</span>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('sora/assets/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('sora/assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('sora/assets/js/core/bootstrap.min.js') }}"></script>
</body>
</html>
