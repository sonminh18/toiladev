<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="shortcut icon" href="img/favicon.png">
    <title>Đăng Nhập Admin / {{env('APP_DOMAIN')}}</title>


    <link rel="stylesheet" href="theme/fonts/open-sans/style.min.css">
    <link rel="stylesheet" href="theme/fonts/iconfont/iconfont.css">
    <link rel="stylesheet" href="theme/vendor/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="theme/vendor/tippyjs/tippy.css">
    <link rel="stylesheet" href="theme/vendor/select2/css/select2.min.css">
    <link rel="stylesheet" href="theme/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="theme/css/style.min.css" id="stylesheet">



    <script src="theme/js/ie.assign.fix.min.js"></script>
</head>
<body class="p-front">

<div class="preloader">
    <div class="loader">
        <span class="loader__indicator"></span>
        <div class="loader__label"><img src="theme/img/logo.png" alt=""></div>
    </div>
</div>


{{--<div class="navbar navbar-light navbar-expand-lg p-front__navbar"> <!-- is-dark -->--}}
    {{--<a class="navbar-brand" href="/"><img src="theme/img/logo.png" alt=""/></a>--}}
    {{--<a class="navbar-brand-sm" href="/"><img src="theme/img/logo-sm.png" alt=""/></a>--}}

    {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse">--}}
        {{--<span class="iconfont iconfont-navbar-open navbar-toggler__open"></span>--}}
        {{--<span class="iconfont iconfont-alert-close navbar-toggler__close"></span>--}}
    {{--</button>--}}

    {{--<div class="collapse navbar-collapse" id="navbar-collapse">--}}
        {{--<div class="p-front__navbar-collapse">--}}
            {{--<div class="navbar-nav">--}}
                {{--<a class="nav-item nav-link active" href="#">About</a>--}}
                {{--<a class="nav-item nav-link" href="#">Features</a>--}}
                {{--<a class="nav-item nav-link" href="#">Pricing</a>--}}
            {{--</div>--}}
            {{--<form class="form-inline">--}}
                {{--<a class="btn btn-info btn-rounded" href="#">Sign Up</a>--}}
            {{--</form>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}



<div class="p-front__content">

    <div class="p-signin-a">
        <form method="POST" action="admin/login/signin" class="p-signin-a__form">
            <h4 class="p-signin-a__form-heading" style="text-transform: uppercase;">{{env('APP_DOMAIN')}}</h4>
            <p class="p-signin-a__form-description" >
                Vui lòng nhập thông tin đăng nhập vào bên dưới
            </p>
            <div class="form-group">
                <input type="email" class="form-control form-control-lg" placeholder="Email" name="email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control form-control-lg" placeholder="Password" name="password">
            </div>
            <div class="form-group">
                <button class="btn btn-info btn-lg btn-block btn-rounded" type="submit">Đăng Nhập</button>
            </div>

            <div class="p-signin-a__form-separator"><span>Hoặc</span></div>

            <div class="form-group">
                <button class="btn btn-chambray btn-block iconfont icon-left btn-lg btn-rounded p-signin-a__form-facebook" type="button">
                    Quên Mật Khẩu <span class="btn-icon iconfont"></span>
                </button>
            </div>
        </form>

        {{--<div class="p-signin-a__form-link">Already have an account? <a href="signup.html">Sign Up</a></div>--}}
    </div>

</div>


<footer class="p-front__footer">
    <ul class="nav">
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link active" href="#">Contact</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="#">FAQ</a>--}}
        {{--</li>--}}
        {{--<li class="nav-item">--}}
            {{--<a class="nav-link" href="#">Terms of Service</a>--}}
        {{--</li>--}}
    </ul>
    <span>2017 &copy; {{env('APP_DOMAIN')}} by Son Nguyen</span>
</footer>



<script src="theme/vendor/jquery/jquery.min.js"></script>
<script src="theme/vendor/popper/popper.min.js"></script>
<script src="theme/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="theme/vendor/select2/js/select2.full.min.js"></script>
<script src="theme/vendor/simplebar/simplebar.js"></script>
<script src="theme/vendor/text-avatar/jquery.textavatar.js"></script>
<script src="theme/vendor/tippyjs/tippy.all.min.js"></script>
<script src="theme/vendor/flatpickr/flatpickr.min.js"></script>
<script src="theme/vendor/wnumb/wNumb.js"></script>
<script src="theme/js/main.js"></script>



<div class="sidebar-mobile-overlay"></div>

</body>
</html>
