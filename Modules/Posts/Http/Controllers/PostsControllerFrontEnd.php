<?php

namespace Modules\Posts\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use app\helper;

use Modules\Posts\Entities\posts;
use Modules\Posts\Entities\posttype;
use Modules\Posts\Entities\tags;

class PostsControllerFrontEnd extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    private $posts;
    private $postType;
    private $tags;
    private $helper;
    public function __construct()
    {
        $this->posts=new posts();
        $this->postType= new posttype();
        $this->tags= new tags();
        $this->helper= new helper();
    }

    public function index($link){
        $Data=$this->posts->GetPostByLink($link);
        $PostSameType=$this->posts->GetPostSameType($Data->iLoaiBaiViet);
        return view('posts::frontend_post',compact(['Data','PostSameType']));
//        echo json_encode($PostSameType);
    }
}
