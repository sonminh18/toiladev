@extends('frontend/home')
@section('contents_home')
    <div class="container sitecontainer single-wrapper nopt bgw">
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 m22">
                <div class="widget ">
                @foreach($NewestPost as $item)
                    <div class="large-widget m30">
                        <div class="post clearfix">
                            <div class="title-area">
                                <div class="colorfulcats">
                                    <a href="/category/{{$item->vLienKetLBV}}"><span class="label label-primary">{{$item->vTenLoaiBaiViet}}</span></a>
                                    {{--<a href="#"><span class="label label-warning">Web Design</span></a>--}}
                                </div>
                                <a href="/{{$item->vLienKet}}"><h3>{{$item->vTieuDe}}</h3></a>

                                <div class="large-post-meta">
                                    {{--<span class="avatar"><a href="author.html"><img src="src/upload/avatar_01.png" alt="" class="img-circle"> Kubra Karahasan</a></span>--}}
                                    {{--<small>|</small>--}}
                                    <span><a href="#"><i class="fa fa-clock-o"></i> {{date("d/m/Y", strtotime($item->created_at))}}</a></span>
                                    <small class="hidden-xs">|</small>
                                    <span class="hidden-xs"><a href="#"><i class="fa fa-comments-o"></i> {{$item->iBinhLuan}}</a></span>
                                    <small class="hidden-xs">|</small>
                                    <span class="hidden-xs"><a href="#"><i class="fa fa-eye"></i> {{$item->iLuotXem}}</a></span>
                                </div>
                                <!-- end meta -->

                                <div class="post-sharing">
                                    <ul class="list-inline">
                                        <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                                        <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                                        <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <!-- end post-sharing -->
                            </div>
                            <!-- /.pull-right -->

                            <div class="post-media">
                                <a href="/{{$item->vLienKet}}">
                                    <img alt="" src="{{$item->vHinhAnh}}" style="width: 100%;max-height: 491px" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- end post -->

                        <div class="post-desc category-desc">
                            <p>{{$item->vMoTa}}</p>
                            <a href="/{{$item->vLienKet}}" class="btn btn-primary">Xem thêm</a>
                        </div>
                        <!-- end post-desc -->
                    </div>
                @endforeach
                </div>

            </div>
            <!-- end col -->

            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="widget">
                    <div class="widget-title">
                        <h4>Social Media</h4>
                        <hr>
                    </div>
                    <!-- end widget-title -->

                    <div class="social-media-widget m30">
                        <ul class="list-social clearfix">
                            <li class="facebook"><a href="#"><i class="fa fa-facebook"></i> <small>12.042</small></a></li>
                            <li class="twitter"><a href="#"><i class="fa fa-twitter"></i> <small>67.221</small></a></li>
                            <li class="googleplus"><a href="#"><i class="fa fa-google-plus"></i> <small>44.213</small></a></li>
                            <li class="rss"><a href="#"><i class="fa fa-rss"></i> <small>22.551</small></a></li>
                            <li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i> <small>33.122</small></a></li>
                            <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i> <small>55.123</small></a></li>
                            <li class="youtube"><a href="#"><i class="fa fa-youtube"></i> <small>44.112</small></a></li>
                            <li class="instagram"><a href="#"><i class="fa fa-instagram"></i> <small>12.441</small></a></li>
                        </ul>
                    </div>
                    <!-- end social -->
                </div>

                {{--<div class="widget hidden-xs">--}}
                    {{--<div class="widget-title">--}}
                        {{--<h4>Advertising</h4>--}}
                        {{--<hr>--}}
                    {{--</div>--}}
                    {{--<!-- end widget-title -->--}}

                    {{--<div class="ads-widget m30">--}}
                        {{--<a href="#"><img src="/src/upload/banner_01.jpg" alt="" class="img-responsive"></a>--}}
                    {{--</div>--}}
                    {{--<!-- end ads-widget -->--}}
                {{--</div>--}}
                <!-- end widget -->

                <div class="widget ">
                    <div class="widget-title">
                        <h4>Bài viết xem nhiều</h4>
                        <hr>
                    </div>
                    <!-- end widget-title -->

                    <div class="mini-widget m30">
                        @foreach($HighSeen as $value)
                            <div class="post clearfix">
                                <div class="mini-widget-thumb">
                                    <a href="{{$value->vLienKet}}">
                                        <img alt="" src="{{$value->vHinhAnh}}" class="img-responsive">
                                    </a>
                                </div>
                                <div class="mini-widget-title">
                                    <a href="{{$value->vLienKet}}"> {{$value->vTieuDe}}</a>
                                    <div class="mini-widget-hr"></div>
                                </div>
                            </div>
                        @endforeach
                        {{--<div class="post clearfix">--}}
                            {{--<div class="mini-widget-thumb">--}}
                                {{--<a href="single.html">--}}
                                    {{--<img alt="" src="/src/upload/mini_widget_02.jpg" class="img-responsive">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--<div class="mini-widget-title">--}}
                                {{--<a href="single.html"> ShowWP team moved to a new office </a>--}}
                                {{--<div class="mini-widget-hr"></div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>
                    <!-- end mini-widget -->
                </div>
                <!-- end widget -->

            </div>
            <!-- end col -->

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="widget ">
                    <div class="widget-title">
                        <h4>Có thể bạn sẽ thích</h4>
                        <hr>
                    </div>
                    <!-- end widget-title -->
                    <div class="infinite-scroll">
                        <div class="review-posts row m30 ">
                            @foreach($Newest10Post as $item)
                                <div class="post-review col-md-3 col-sm-12">
                                    <div class="post-media entry">
                                        <a href="/{{$item->vLienKet}}" title="">
                                            <img src="{{$item->vHinhAnh}}" alt="" style="max-height: 170px;" class="img-responsive">
                                            <div class="magnifier">
                                                <!-- end review-stat -->
                                                <div class="hover-title">
                                                    <span><i class="fa fa-folder-open"></i> {{$item->vTenLoaiBaiViet}}</span>
                                                </div>
                                                <!-- end title -->
                                            </div>
                                            <!-- end magnifier -->
                                        </a>
                                    </div>
                                    <!-- end media -->
                                    <div class="post-title">
                                        <h3><a href="/{{$item->vLienKet}}">{{$item->vTieuDe}}</a></h3>
                                    </div>
                                    <!-- end post-title -->
                                </div>
                                <!-- end post-review -->
                            @endforeach
                            {{$Newest10Post->links()}}
                        </div>
                        <!-- end review-post -->
                    </div>


                    <!-- end review-post -->
                </div>
                <!-- end widget -->
            </div>
            <!-- end col -->
        </div>
    </div>
@endsection