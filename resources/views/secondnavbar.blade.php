<div class="navbar navbar-default" id="navbar-second">
    <div class="navbar-boxed">
        <ul class="nav navbar-nav no-border visible-xs-block">
            <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
        </ul>

        <div class="navbar-collapse collapse" id="navbar-second-toggle">
            <ul class="nav navbar-nav">
                <li><a href="/admin/dashboard"><i class="icon-display4 position-left"></i> Dashboard</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-compose position-left"></i> Bài Viết<span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu width-200">
                        <li class="dropdown-header">Chọn một lựa chọn</li>
                        <li><a href="/admin/posts"><i class="icon-list3"></i> Danh sách</a></li>
                        <li><a href="/admin/posts/create"><i class="icon-file-plus"></i> Thêm bài viết</a></li>
                    </ul>
                </li>
                <li><a href="/admin/posttype"><i class="icon-list2 position-left"></i> Loại Bài Viết</a></li>

            </ul>

            {{--<ul class="nav navbar-nav navbar-right">--}}
                {{--<li>--}}
                    {{--<a>--}}
                        {{--<i class="icon-users4 position-left"></i>--}}
                        {{--{{session('teamname')}} <i class="icon-arrow-left5 position-left"></i> {{session('deptname')}}--}}
                        {{--<span class="label label-inline position-right bg-success-400"></span>--}}
                    {{--</a>--}}
                {{--</li>--}}
            {{--</ul>--}}
        </div>
    </div>
</div>