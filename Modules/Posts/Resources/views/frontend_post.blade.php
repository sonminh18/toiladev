@extends('frontend/home')
@section('contents_home')
    <div class="container singlefullwidth sitecontainer single-wrapper bgw">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 m22 single-post">
                <div class="widget">
                    <div class="large-widget m30">
                        <div class="post clearfix">

                            <div class="title-area text-center">
                                <div class="bread">
                                    <ol class="breadcrumb">
                                        <li><a href="/">Trang chủ</a></li>
                                        <li class=""><a href="/category/{{$Data->vLienKetLBV}}">{{$Data->vTenLoaiBaiViet}}</a></li>
                                        <li class="active">{{$Data->vTieuDe}}</li>
                                    </ol>
                                </div><!-- end bread -->
                                <div class="colorfulcats">
                                    <a href="#"><span class="label label-primary">{{$Data->vTenLoaiBaiViet}}</span></a>
                                    {{--<a href="#"><span class="label label-warning">Web Design</span></a>--}}
                                </div>
                                <h3>{{$Data->vTieuDe}}</h3>

                                <div class="large-post-meta">
                                    {{--<span class="avatar"><a href="author.html"><img src="src/upload/avatar_02.png" alt="" class="img-circle"> Mark Twisted</a></span>--}}
                                    {{--<small>|</small>--}}
                                    <span><a href="#"><i class="fa fa-clock-o"></i> {{date("d/m/Y", strtotime($Data->created_at))}}</a></span>
                                    <small class="hidden-xs">|</small>
                                    <span class="hidden-xs"><a href="#"><i class="fa fa-comments-o"></i> {{$Data->iBinhLuan}}</a></span>
                                    <small class="hidden-xs">|</small>
                                    <span class="hidden-xs"><a href="#"><i class="fa fa-eye"></i> {{$Data->iLuotXem}}</a></span>
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
                                <a href="single.html">
                                    <img alt="" src="{{$Data->vHinhAnhBV}}" style="max-width: 1024px;max-height: 512px" class="img-responsive">
                                </a>
                            </div>

                        </div><!-- end post -->

                        <div class="post-desc">
                            {!! $Data->vNoiDungChiTiet !!}

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i> <span class="hidden-xs">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i> <span class="hidden-xs">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end post-desc -->

                        <div class="post-bottom">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="tags">
                                        <h4>Tags</h4>
                                        <a href="#">cinema</a>
                                        <a href="#">club</a>
                                        <a href="#">html5</a>
                                        <a href="#">css3</a>
                                        <a href="#">web design</a>
                                    </div><!-- end tags -->
                                </div><!-- end col -->

                                <div class="col-md-4 hidden-xs">
                                    <div class="post-share">
                                        <div class="customshare">
                                                 <span class="list">
                                                    <strong><i class="fa fa-share-alt"></i> 980
                                                    <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                                                    <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                                                    <a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
                                                    </strong>
                                                </span>
                                        </div>
                                    </div><!-- end share -->
                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end bottom -->

                        <div class="row m22 related-posts">
                            <div class="col-md-12">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4>Có thể bạn sẽ thích <span><a href="#">Xem tất cả</a></span></h4>
                                        <hr>
                                    </div><!-- end widget-title -->

                                    <div class="review-posts row m30">
                                        @foreach($PostSameType as $item)
                                            <div class="post-review col-md-4 col-sm-12 col-xs-12">
                                                <div class="post-media entry">
                                                    <img src="{{$item->vHinhAnh}}" alt="" class="img-responsive">
                                                    <div class="magnifier">
                                                        <div class="hover-title-left">
                                                            <span><a href="#" title=""><i class="fa fa-folder-open"></i> {{$item->vTenLoaiBaiViet}}</a></span>
                                                        </div><!-- end title -->
                                                    </div><!-- end magnifier -->
                                                </div><!-- end media -->
                                                <div class="post-title">
                                                    <h3><a href="{{$item->vLienKet}}">{{$item->vTieuDe}}</a></h3>
                                                </div><!-- end post-title -->
                                            </div><!-- end post-review -->
                                        @endforeach
                                    </div><!-- end review-post -->
                                </div><!-- end widget -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div id="comments" class="row">
                            <div class="col-md-12">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4>What other's say about : How ThePhone thriller..</h4>
                                        <hr>
                                    </div><!-- end widget-title -->

                                    <div class="comments">
                                        <div class="well">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="src/upload/avatar_02.png" alt="Generic placeholder image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">John DOE</h4>
                                                    <div class="time-comment clearfix">
                                                        <small class="pull-left">21 Jun 2015</small>
                                                        <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                    </div><!-- end time-comment -->
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                </div>
                                            </div><!-- end media -->

                                            <div class="media comment-reply">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="src/upload/avatar_01.png" alt="Generic placeholder image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Amanda FOX</h4>
                                                    <div class="time-comment clearfix">
                                                        <small class="pull-left">21 Jun 2015</small>
                                                        <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                    </div><!-- end time-comment -->
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                </div>
                                            </div><!-- end media -->

                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="#">
                                                        <img class="media-object img-circle" src="images/avatar.png" alt="Generic placeholder image">
                                                    </a>
                                                </div>
                                                <div class="media-body">
                                                    <h4 class="media-heading">Mark BOBS</h4>
                                                    <div class="time-comment clearfix">
                                                        <small class="pull-left">21 Jun 2015</small>
                                                        <a class="pull-right btn btn-primary btn-xs">Reply</a>
                                                    </div><!-- end time-comment -->
                                                    <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                                                </div>
                                            </div><!-- end media -->
                                        </div><!-- end well -->
                                    </div><!-- end collapse -->
                                </div><!-- end widget -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="widget">
                                    <div class="widget-title">
                                        <h4>Leave a Comment</h4>
                                        <hr>
                                    </div><!-- end widget-title -->

                                    <div class="commentform">
                                        <form class="row">
                                            <div class="col-md-12 col-sm-12">
                                                <label>Comment <span class="required">*</span></label>
                                                <textarea class="form-control" placeholder=""></textarea>
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label>Name <span class="required">*</span></label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>
                                            <div class="col-md-4 col-sm-12">
                                                <label>Email <span class="required">*</span></label>
                                                <input type="email" class="form-control" placeholder="">
                                            </div>

                                            <div class="col-md-4 col-sm-12">
                                                <label>Website</label>
                                                <input type="text" class="form-control" placeholder="">
                                            </div>

                                            <div class="col-md-12 col-sm-12">
                                                <input type="submit" value="Send Comment" class="btn btn-primary">
                                            </div>
                                        </form>
                                    </div><!-- end newsletter -->
                                </div><!-- end widget -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                    </div><!-- end large-widget -->
                </div><!-- end widget -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div>
@endsection