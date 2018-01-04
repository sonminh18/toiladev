<?php

namespace Modules\Home\Entities;

use Illuminate\Database\Eloquent\Model;

class baiviet extends Model
{
    protected $table = "baiviet";
    public function GetNewest(){
        return $this
            ->select(['baiviet.vHinhAnh','baiviet.vTieuDe','baiviet.vLienKet','baiviet.created_at','iLuotXem','iBinhLuan','loaibaiviet.vTenLoaiBaiViet'])
            ->leftJoin('loaibaiviet','baiviet.iLoaiBaiViet','=','loaibaiviet.iMaLoaiBaiViet')
            ->where('baiviet.iDelete','=',0)
            ->orderBy('baiviet.created_at','desc')
            ->limit(3)
            ->get();
    }
}
