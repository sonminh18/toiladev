<?php

namespace Modules\Posttype\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Posttype\Entities\posttype;
use Illuminate\Support\Facades\Auth;
use app\helper;

class PosttypeControllerFrontEnd extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    private $postType;
    private $helper;
    public function __construct()
    {
        $this->postType= new posttype();
        $this->helper=new helper();
    }
    public function index($link){
        $DataCat=$this->postType->GetPostTypeByLink($link);
        $DataPot=$this->postType->GetPostTypeByLinkLimited($link)->paginate(5);
        return view('posttype::frontend_posttype',compact(['DataCat','DataPot']));
//        echo json_encode($DataPot);
    }
}
