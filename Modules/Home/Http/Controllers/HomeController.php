<?php

namespace Modules\Home\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

use Modules\Home\Entities\baiviet;
use Modules\Home\Entities\loaibaiviet;

class HomeController extends Controller
{
    private $BaiViet;
    private $LoaiBaiViet;

    public function __construct()
    {
        $this->BaiViet = new baiviet();
        $this->LoaiBaiViet = new loaibaiviet();
    }

    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $NewestPost=$this->BaiViet->GetNewest();
        $Newest10Post=$this->BaiViet->Get10Newest()->paginate(4);
        $HighSeen=$this->BaiViet->GetHighSeen();
//        echo json_encode($Newest10Post);
        return view('home::index',compact(['NewestPost','Newest10Post','HighSeen']));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('home::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('home::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('home::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
