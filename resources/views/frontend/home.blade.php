<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- SITE META -->
    <title>TechBlog | Responsive Magazine Site Template</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="/src/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="/src/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/src/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/src/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/src/images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/src/images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/src/images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/src/images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/src/images/apple-touch-icon-152x152.png">

    <!-- TEMPLATE STYLES -->
    <link rel="stylesheet" type="text/css" href="/src/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/src/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/src/css/flexslider.css">
    <link rel="stylesheet" type="text/css" href="/src/style.css">

    <!-- CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="/src/css/custom.css">

    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<style>
    .fixed {
        position: fixed;
        top:0; left:0;
        width: 100%; }
</style>
<body>

{{--<div class="left-menu hidden-sm hidden-md hidden-xs">--}}
    {{--<ul class="dm-social">--}}
        {{--<li class="facebookbg"><a href="#" class="fa fa-facebook" data-toggle="tooltip" data-placement="right" title="Facebook">Facebook</a></li>--}}
        {{--<li class="googlebg"><a href="#" class="fa fa-google-plus" data-toggle="tooltip" data-placement="right" title="Google+">Google+</a></li>--}}
        {{--<li class="twitterbg"><a href="#" class="fa fa-twitter" data-toggle="tooltip" data-placement="right" title="Twitter">Twitter</a></li>--}}
        {{--<li class="pinterestbg"><a href="#" class="fa fa-pinterest" data-toggle="tooltip" data-placement="right" title="Pinterest">Pinterest</a></li>--}}
        {{--<li class="linkedinbg"><a href="#" class="fa fa-linkedin" data-toggle="tooltip" data-placement="right" title="Linkedin">Linkedin</a></li>--}}
        {{--<li class="rssbg"><a href="#" class="fa fa-rss" data-toggle="tooltip" data-placement="right" title="RSS">RSS</a></li>--}}
        {{--<li class="share">--}}
            {{--<a href="#" class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="91k Share"></a>--}}
        {{--</li>--}}
    {{--</ul>--}}
{{--</div>--}}

<!-- START SITE -->

<div id="wrapper">
    <div class="logo-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <a class="navbar-brand" href="/"><img src="/src/images/logo.png" alt=""></a>
                </div>
                <!-- end col -->
                <div class="col-md-9 col-sm-12">
                    <div class="ads-widget clearfix">
                        <a href="#"><img src="/src/upload/banner_03.jpg" alt="" class="img-responsive"></a>
                    </div>
                    <!-- end ads-widget -->
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end logo-wrapper -->
    @include('frontend/headerhome')

    @yield('contents_home')

    <!-- end container -->
    @include('frontend/footer')

</div>
<!-- end wrapper -->
<!-- END SITE -->

<script src="/src/js/jquery.min.js"></script>
<script src="/src/js/bootstrap.js"></script>
<script src="/src/js/plugins.js"></script>
<script src="/src/js/jquery.jscroll.js"></script>
<!-- FlexSlider JavaScript
================================================== -->
<script src="/src/js/jquery.flexslider.js"></script>
<script>
    $(window).load(function() {
        $('#property-slider .flexslider').flexslider({
            animation: "fade",
            slideshowSpeed: 6000,
            animationSpeed: 1300,
            directionNav: true,
            controlNav: false,
            keyboardNav: true
        });
        $('ul.pagination').hide();
        $('.infinite-scroll').jscroll({
            autoTrigger: true,
            loadingHtml: '<img class="center-block" src="/src/images/Ring.gif" style="height: 90px;width: 90px" alt="Loading..." />',
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.infinite-scroll',
            callback: function() {
                // xóa thanh phân trang ra khỏi html mỗi khi load xong nội dung
                $('ul.pagination').remove();
//                $('.infinite-scroll').hide(0).fadeIn(2000);
            }
        });
        var stickyOffset = $('.sticky').offset().top;

        $(window).scroll(function(){
            var sticky = $('.sticky'),
                scroll = $(window).scrollTop();

            if (scroll >= stickyOffset) sticky.addClass('fixed');
            else sticky.removeClass('fixed');
        });
    });
</script>

</body>

</html>