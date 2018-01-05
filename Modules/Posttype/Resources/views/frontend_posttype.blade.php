@extends('frontend/home')
@section('contents_home')
    <section class="section bgg">
        <div class="container">
            <div class="title-area">
                <h2>{{$DataCat->vTenLoaiBaiViet}}</h2>
                <div class="bread">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active"><a href="/category/{{$DataCat->vLienKet}}">{{$DataCat->vTenLoaiBaiViet}}</a></li>
                    </ol>
                </div><!-- end bread -->
            </div><!-- /.pull-right -->
        </div><!-- end container -->
    </section>
    <div class="container sitecontainer single-wrapper nopt bgw">
        <div class="container sitecontainer single-wrapper bgw">
            <div class="row">
                <div class="col-md-9 col-sm-12 col-xs-12 m22">
                    <div class="widget infinite-scroll">
                        @foreach($DataPot as $item)
                            <div class="large-widget m30">
                                <div class="post clearfix">
                                    <div class="title-area">
                                        <div class="colorfulcats">
                                            <a href="#"><span class="label label-primary">{{$item->vTenLoaiBaiViet}}</span></a>
                                        </div>
                                        <a href="/{{$item->vLienKet}}"><h3>{{$item->vTieuDe}}</h3></a>

                                        <div class="large-post-meta">
                                            <span><a href=""><i class="fa fa-clock-o"></i> 21 March 2016</a></span>
                                            <small class="hidden-xs">|</small>
                                            <span class="hidden-xs"><a href=""><i class="fa fa-comments-o"></i> 12</a></span>
                                            <small class="hidden-xs">|</small>
                                            <span class="hidden-xs"><a href=""><i class="fa fa-eye"></i> 55</a></span>
                                        </div><!-- end meta -->

                                        <div class="post-sharing">
                                            <ul class="list-inline">
                                                <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                                                <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                                                <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div><!-- end post-sharing -->
                                    </div><!-- /.pull-right -->

                                    <div class="post-media">
                                        <a href="/{{$item->vLienKet}}">
                                            <img alt="" src="{{$item->vHinhAnh}}" style="width: 100%;max-height: 491px" class="img-responsive">
                                        </a>
                                    </div>
                                </div><!-- end post -->

                                <div class="post-desc category-desc">
                                    <p>
                                        {!! $item->vMoTa !!}
                                    </p>
                                    <a href="/{{$item->vLienKet}}" class="btn btn-primary">Đọc tiếp</a>
                                </div><!-- end post-desc -->
                            </div><!-- end large-widget -->
                        @endforeach
                        {{$DataPot->links()}}
                    </div><!-- end widget -->
                </div>
                <!-- end col -->

                {{--<div class="col-md-3 col-sm-12 col-xs-12">--}}
                    {{--<div class="widget">--}}
                        {{--<div class="widget-title">--}}
                            {{--<h4>Social Media</h4>--}}
                            {{--<hr>--}}
                        {{--</div><!-- end widget-title -->--}}

                        {{--<div class="social-media-widget m30">--}}
                            {{--<ul class="list-social clearfix">--}}
                                {{--<li class="facebook"><a href="#"><i class="fa fa-facebook"></i> <small>12.042</small></a></li>--}}
                                {{--<li class="twitter"><a href="#"><i class="fa fa-twitter"></i> <small>67.221</small></a></li>--}}
                                {{--<li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i> <small>44.213</small></a></li>--}}
                                {{--<li class="rss"><a href="#"><i class="fa fa-rss"></i> <small>22.551</small></a></li>--}}
                                {{--<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i> <small>33.122</small></a></li>--}}
                                {{--<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i> <small>55.123</small></a></li>--}}
                                {{--<li class="youtube"><a href="#"><i class="fa fa-youtube"></i> <small>44.112</small></a></li>--}}
                                {{--<li class="instagram"><a href="#"><i class="fa fa-instagram"></i> <small>12.441</small></a></li>--}}
                            {{--</ul>--}}
                        {{--</div><!-- end social -->--}}
                    {{--</div>--}}

                    {{--<div class="widget hidden-xs">--}}
                        {{--<div class="widget-title">--}}
                            {{--<h4>Advertising</h4>--}}
                            {{--<hr>--}}
                        {{--</div><!-- end widget-title -->--}}

                        {{--<div class="ads-widget m30">--}}
                            {{--<a href="#"><img src="src/upload/banner_01.jpg" alt="" class="img-responsive"></a>--}}
                        {{--</div><!-- end ads-widget -->--}}
                    {{--</div><!-- end widget -->--}}

                    {{--<div class="widget">--}}
                        {{--<div class="widget-title">--}}
                            {{--<h4>Carrier</h4>--}}
                            {{--<hr>--}}
                        {{--</div><!-- end widget-title -->--}}

                        {{--<div class="mini-widget carrier-widget m30">--}}
                            {{--<div class="post clearfix">--}}
                                {{--<div class="mini-widget-thumb">--}}
                                    {{--<a href="single.html">--}}
                                        {{--<img alt="" src="src/upload/carrer_01.jpg" class="img-responsive">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="mini-widget-title">--}}
                                    {{--<a href="single.html"> We are looking a team member</a>--}}
                                    {{--<span class="label label-primary">Full time</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="post clearfix">--}}
                                {{--<div class="mini-widget-thumb">--}}
                                    {{--<a href="single.html">--}}
                                        {{--<img alt="" src="src/upload/carrer_02.jpg" class="img-responsive">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="mini-widget-title">--}}
                                    {{--<a href="single.html"> Looking for support members (15-25 mails)</a>--}}
                                    {{--<span class="label label-danger">Part time</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="post clearfix">--}}
                                {{--<div class="mini-widget-thumb">--}}
                                    {{--<a href="single.html">--}}
                                        {{--<img alt="" src="src/upload/carrer_03.jpg" class="img-responsive">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="mini-widget-title">--}}
                                    {{--<a href="single.html"> Who fix my PHP problem?</a>--}}
                                    {{--<span class="label label-info">Freelancer</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            {{--<div class="post clearfix">--}}
                                {{--<div class="mini-widget-thumb">--}}
                                    {{--<a href="single.html">--}}
                                        {{--<img alt="" src="src/upload/carrer_04.jpg" class="img-responsive">--}}
                                    {{--</a>--}}
                                {{--</div>--}}
                                {{--<div class="mini-widget-title">--}}
                                    {{--<a href="single.html"> Looking Logo Designer ($15 Budget) </a>--}}
                                    {{--<span class="label label-info">Freelancer</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div><!-- end mini-widget -->--}}
                    {{--</div><!-- end widget -->--}}
                {{--</div><!-- end col -->--}}
            </div><!-- end row -->
        </div>
    </div>
@endsection