<?php

namespace Modules\Home\Entities;

use Illuminate\Database\Eloquent\Model;

class baiviet extends Model
{
    protected $table = "baiviet";
    public function GetNewest(){
        return $this
            ->select(['baiviet.vHinhAnh','baiviet.vTieuDe','baiviet.vLienKet','baiviet.vMoTa','baiviet.created_at','iLuotXem','iBinhLuan','loaibaiviet.vTenLoaiBaiViet','loaibaiviet.vLienKet AS vLienKetLBV'])
            ->leftJoin('loaibaiviet','baiviet.iLoaiBaiViet','=','loaibaiviet.iMaLoaiBaiViet')
            ->where('baiviet.iDelete','=',0)
            ->orderBy('baiviet.created_at','desc')
            ->limit(5)
            ->get();
    }
    public function Get10Newest(){
        return $this
            ->select(['baiviet.*','loaibaiviet.vLienKet AS vLienKetLBV'])
            ->leftJoin('loaibaiviet','baiviet.iLoaiBaiViet','=','loaibaiviet.iMaLoaiBaiViet')
            ->where('baiviet.iDelete','=',0)
            ->orderBy('baiviet.created_at','desc');
//            ->limit(5)
//            ->offset(3)
//            ->paginate(5);
    }
    public function GetHighSeen(){
        return $this
            ->select(['baiviet.vHinhAnh','baiviet.vTieuDe','baiviet.vLienKet'])
            ->where('baiviet.iDelete','=',0)
            ->orderBy('baiviet.iLuotXem','DESC')
            ->limit(5)
            ->get();
    }
}
