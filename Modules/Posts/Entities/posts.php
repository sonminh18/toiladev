<?php

namespace Modules\Posts\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;

class posts extends Model
{
    protected $table = "baiviet";
    protected $guarded = ['iMaBaiViet','iBinhLuan'];
    public function GetListAll($key,$pageindex,$pageSize){
        Paginator::currentPageResolver(function () use ($pageindex) {
            return $pageindex;
        });
        return $this->where('iDelete','=',0)->where('vTieuDe','like','%'.$key.'%')->paginate($pageSize);
    }
    public function GetPostById($id){
        return $this->where('iMaBaiViet','=',$id)->first();
    }
    public function GetPostByLink($link){
        return $this
            ->select(['*','loaibaiviet.vLienKet AS vLienKetLBV','baiviet.vHinhAnh AS vHinhAnhBV'])
            ->leftJoin('loaibaiviet','baiviet.iLoaiBaiViet','=','loaibaiviet.iMaLoaiBaiViet')
            ->where('baiviet.vLienKet','=',$link)
            ->first();
    }
    public function GetPostSameType($id){
        return $this
            ->select(['baiviet.vHinhAnh','baiviet.vTieuDe','baiviet.vLienKet','baiviet.vMoTa','baiviet.created_at','iLuotXem','iBinhLuan','loaibaiviet.vTenLoaiBaiViet','loaibaiviet.vLienKet AS vLienKetLBV'])
            ->leftJoin('loaibaiviet','baiviet.iLoaiBaiViet','=','loaibaiviet.iMaLoaiBaiViet')
            ->where('baiviet.iLoaiBaiViet','=',$id)
            ->limit(6)
            ->get();
    }
}
