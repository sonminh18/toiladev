@extends('frontend/home')
@section('contents_home')
    <div class="container">
        <div class="info-content padding-top-30">
            <div class="row">
                <?php
                    $NewPost='';
                    $NewPostLeft='<div class="col-md-4 col-sm-4">';
                    $i=1;
                    foreach ($NewestPost as $value){
                        if($i==1){
                            $NewPost.='<div class="col-md-8 col-sm-8">
                                            <article class="style3 style-alt">
                                                <a href="/bai-viet/'.$value['vLienKet'].'">
                                                    <div class="overlay overlay-02"></div>
                                                    <div class="post-thumb">
                                                        <div class="small-title cat">'.$value['vTenLoaiBaiViet'].'</div>
                                                        <div class="post-excerpt">
                                                            <div class="meta">
                                                                <span class="date">'.date("M d ,Y", strtotime($value['created_at'])).'</span>
                                                            </div>
                                                            <h3 class="h1 text-white">'.$value['vTieuDe'].'</h3>
                                                            <div class="meta">
                                                                <span class="comment"><i class="fa fa-comment-o"></i> '.$value['iBinhLuan'].'</span>
                                                                <span class="views"><i class="fa fa-eye"></i> '.$value['iLuotXem'].' Lượt Xem</span>
                                                            </div>
                                                        </div>
                                                        <div class="wrapper"><img src="'.$value['vHinhAnh'].'" class="img-responsive" alt=""></div>
                                                    </div>
                                                </a>
                                            </article>
                                        </div>';
                        }
                        else{
                            $NewPostLeft.='<article class="style4 style-alt margin-bottom-10">
                                                <a href="/bai-viet/'.$value['vLienKet'].'">
                                                    <div class="overlay overlay-02"></div>
                                                    <div class="post-thumb">
                                                        <div class="small-title cat">'.$value['vTenLoaiBaiViet'].'</div>
                                                        <div class="post-excerpt">
                                                            <div class="meta">
                                                                <span class="date">'.date("M d ,Y", strtotime($value['created_at'])).'</span>
                                                            </div>
                                                            <h3 class="text-white">'.$value['vTieuDe'].'</h3>
                                                        </div>
                                                        <div class="wrapper"><img src="'.$value['vHinhAnh'].'" class="img-full" alt=""></div>
                                                    </div>
                                                </a>
                                            </article>';
                        }
                        $i++;
                    }
                    $NewPostLeft.='</div>';
                    echo $NewPost.$NewPostLeft;
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <!-- HOME SECTION 1 -->
                <div class="padding-top-60">
                    <h3 class="margin-bottom-15"><b>World</b></h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <article class="article-home style-alt">
                                <a href="../17_post_01.html">
                                    <div class="article-thumb">
                                        <img src="src/img/home/01/1.jpg" class="img-responsive" alt="">
                                    </div>
                                </a>
                                <div class="post-excerpt">
                                    <div class="small-title cat">Travel</div>
                                    <h4><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h4>
                                    <div class="meta">
                                        <span>by <a href="#" class="link">Kevin K.</a></span>
                                        <span>on Sep 23, 2016</span>
                                        <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                                    </div>
                                    <p>After months of courtship, German drug and farm chemical maker Bayer AG has finally reached an</p>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="mini-posts">
                                <article class="style2 style-alt">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <a href="../17_post_01.html">
                                                <div class="article-thumb">
                                                    <img src="src/img/home/01/2.jpg" class="img-responsive" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <div class="post-excerpt no-padding">
                                                <div class="meta">
                                                    <span>Sep 19, 2016</span>
                                                </div>
                                                <h5><a href="./17_post_01.html">What You Missed While Not Watching the Debate</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="style2 style-alt">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <a href="../17_post_01.html">
                                                <div class="article-thumb">
                                                    <img src="src/img/home/01/3.jpg" class="img-responsive" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <div class="post-excerpt no-padding">
                                                <div class="meta">
                                                    <span>Sep 19, 2016</span>
                                                </div>
                                                <h5><a href="./17_post_01.html">New Doodle Celebrates Google Turning 18 All Over Again</a></h5>
                                                <div class="meta">
                                                    <span class="comment"><i class="fa fa-comment-o"></i> 18</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="style2 style-alt">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <a href="../17_post_01.html">
                                                <div class="article-thumb">
                                                    <img src="src/img/home/01/4.jpg" class="img-responsive" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <div class="post-excerpt no-padding">
                                                <div class="meta">
                                                    <span>Sep 19, 2016</span>
                                                </div>
                                                <h5><a href="./17_post_01.html">We Must Move Forward on Clean Power Plan</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="style2 style-alt">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <a href="../17_post_01.html">
                                                <div class="article-thumb">
                                                    <img src="src/img/home/01/5.jpg" class="img-responsive" alt="">
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <div class="post-excerpt no-padding">
                                                <div class="meta">
                                                    <span>Sep 19, 2016</span>
                                                </div>
                                                <h5><a href="./17_post_01.html">The Funeral of Shimon Peres to Be Held on Friday</a></h5>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- // HOME SECTION 1 -->
                <!-- HOME SECTION 3 -->
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h3 class="margin-bottom-15"><b>Travel</b></h3>
                        <article class="style4 style-alt margin-bottom-30">
                            <a href="../17_post_01.html">
                                <div class="overlay overlay-02"></div>
                                <div class="post-thumb">
                                    <div class="small-title cat">Market</div>
                                    <div class="post-excerpt">
                                        <div class="meta">
                                            <span class="date">Sep 22,2016</span>
                                        </div>
                                        <h3 class="text-white">Solange Knowles Will Release Her New Album on Friday</h3>
                                    </div>
                                    <img src="src/img/home/02/4.jpg" class="img-responsive" alt="">
                                </div>
                            </a>
                        </article>
                        <div class="mini-posts">
                            <article class="style2 style-alt">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="../17_post_01.html">
                                            <div class="article-thumb">
                                                <img src="src/img/home/02/5.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="post-excerpt no-padding">
                                            <div class="meta">
                                                <span>Sep 19, 2016</span>
                                            </div>
                                            <h5><a href="./17_post_01.html">What You Missed While Not Watching the Debate</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="style2 style-alt">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="../17_post_01.html">
                                            <div class="article-thumb">
                                                <img src="src/img/home/02/6.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="post-excerpt no-padding">
                                            <div class="meta">
                                                <span>Sep 19, 2016</span>
                                            </div>
                                            <h5><a href="./17_post_01.html">New Doodle Celebrates Google Turning 18 All Over Again</a></h5>
                                            <div class="meta">
                                                <span class="comment"><i class="fa fa-comment-o"></i> 18</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="style2 style-alt">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="../17_post_01.html">
                                            <div class="article-thumb">
                                                <img src="src/img/home/02/7.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="post-excerpt no-padding">
                                            <div class="meta">
                                                <span>Sep 19, 2016</span>
                                            </div>
                                            <h5><a href="./17_post_01.html">We Must Move Forward on Clean Power Plan</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <h3 class="margin-bottom-15"><b>Business</b></h3>
                        <article class="style4 style-alt margin-bottom-30">
                            <a href="../17_post_01.html">
                                <div class="overlay overlay-02"></div>
                                <div class="post-thumb">
                                    <div class="small-title cat">Market</div>
                                    <div class="post-excerpt">
                                        <div class="meta">
                                            <span class="date">Sep 22,2016</span>
                                        </div>
                                        <h3 class="text-white">Solange Knowles Will Release Her New Album on Friday</h3>
                                    </div>
                                    <img src="src/img/home/02/8.jpg" class="img-responsive" alt="">
                                </div>
                            </a>
                        </article>
                        <div class="mini-posts">
                            <article class="style2 style-alt">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="../17_post_01.html">
                                            <div class="article-thumb">
                                                <img src="src/img/home/02/9.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="post-excerpt no-padding">
                                            <div class="meta">
                                                <span>Sep 19, 2016</span>
                                            </div>
                                            <h5><a href="./17_post_01.html">What You Missed While Not Watching the Debate</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="style2 style-alt">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="../17_post_01.html">
                                            <div class="article-thumb">
                                                <img src="src/img/home/02/10.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="post-excerpt no-padding">
                                            <div class="meta">
                                                <span>Sep 19, 2016</span>
                                            </div>
                                            <h5><a href="./17_post_01.html">New Doodle Celebrates Google Turning 18 All Over Again</a></h5>
                                            <div class="meta">
                                                <span class="comment"><i class="fa fa-comment-o"></i> 18</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="style2 style-alt">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <a href="../17_post_01.html">
                                            <div class="article-thumb">
                                                <img src="src/img/home/02/11.jpg" class="img-responsive" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        <div class="post-excerpt no-padding">
                                            <div class="meta">
                                                <span>Sep 19, 2016</span>
                                            </div>
                                            <h5><a href="./17_post_01.html">We Must Move Forward on Clean Power Plan</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <!-- // HOME SECTION 3 -->
                <div class="row">
                    <div class="col-md-12">
                        <br>
                        <h3 class="margin-bottom-15"><b>Bài viết nổi bật</b></h3>
                        <article class="style2">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="src/img/category/08/1.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="post-excerpt">
                                        <div class="small-title cat">Travel</div>
                                        <h3><a href="./17_post_01.html">Twitter Stock Surges On Disney Takeover Rumor</a></h3>
                                        <div class="meta">
                                            <span>by <a href="#" class="link">Kevin K.</a></span>
                                            <span>on Sep 23, 2016</span>
                                            <span class="comment"><i class="fa fa-comment-o"></i> 1</span>
                                        </div>
                                        <p>The list of potential Twitter acquirers continues to grow. In addition to recent reports that Salesforce and Google are interested in possibly buying the real-time news</p>
                                        <a href="#" class="small-title rmore">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="style2">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="src/img/home/03/8.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="post-excerpt">
                                        <div class="small-title cat">Sports</div>
                                        <h3><a href="./17_post_01.html">These Massive Tech Companies Might Buy Twitter</a></h3>
                                        <div class="meta">
                                            <span>by <a href="#" class="link">Matthew L</a></span>
                                            <span>on Sep 23, 2016</span>
                                            <span class="comment"><i class="fa fa-comment-o"></i> 4</span>
                                        </div>
                                        <p>The list of potential Twitter acquirers continues to grow. In addition to recent reports that Salesforce and Google are interested in possibly buying the real-time news</p>
                                        <a href="#" class="small-title rmore">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="style2">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="src/img/home/03/9.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="post-excerpt">
                                        <div class="small-title cat">Lifestyle</div>
                                        <h3><a href="./17_post_01.html">A McDonald's Breakfast Happy Meal Could Be On the Way</a></h3>
                                        <div class="meta">
                                            <span>by <a href="#" class="link">Daniel W.</a></span>
                                            <span>on Sep 23, 2016</span>
                                            <span class="comment"><i class="fa fa-comment-o"></i> 2</span>
                                        </div>
                                        <p>The list of potential Twitter acquirers continues to grow. In addition to recent reports that Salesforce and Google are interested in possibly buying the real-time news</p>
                                        <a href="#" class="small-title rmore">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <!-- ASIDE 1  -->
            <aside class="col-md-4 padding-top-60">
                <div class="side-widget">
                    <h4>Bài viết xem nhiều</h4>
                    <div class="mini-posts">
                        <article class="style2">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="src/img/side/01/1.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a href="./17_post_01.html">What You Missed While Not Watching the Debate</a></h5>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="style2">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="src/img/side/01/2.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a href="./17_post_01.html">New Doodle Celebrates Google Turning 18 All Over Again</a></h5>
                                        <div class="meta">
                                            <span class="comment"><i class="fa fa-comment-o"></i> 18</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="style2">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="src/img/side/01/3.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a href="./17_post_01.html">We Must Move Forward on Clean Power Plan</a></h5>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="style2">
                            <div class="row">
                                <div class="col-md-4 col-sm-4">
                                    <a href="../17_post_01.html">
                                        <div class="article-thumb">
                                            <img src="src/img/side/01/4.jpg" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                </div>
                                <div class="col-md-8 col-sm-8">
                                    <div class="post-excerpt no-padding">
                                        <div class="meta">
                                            <span>Sep 19, 2016</span>
                                        </div>
                                        <h5><a href="./17_post_01.html">The Funeral of Shimon Peres to Be Held on Friday</a></h5>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </aside>
            <!-- // ASIDE 1  -->
        </div>
    </div>
@endsection