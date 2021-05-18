<?php

namespace App\Http\Controllers;

use App\Models\PhieuMuaHang;
use Illuminate\Http\Request;

class MuaHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $muahang = PhieuMuaHang::all();


        return view('muahang.index', compact('muahang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('muahang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $phieumh = new PhieuMuaHang;
        $phieumh->phan_loai = $request->phanloai;
        // $phieumh->nha_cc = $request->nhacc;
        $phieumh->so_luong = $request->soluong;
        $phieumh->thanh_tien = $request->thanhtien;
        $phieumh->ngay_mua = $request->ngay;

        $phieumh->save();

        return view('muahang.create')->with('Add success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $muahang = PhieuMuaHang::find($id);


        return view('muahang.show', compact('muahang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
