<?php

namespace Laraspace\Http\Controllers\Demo;

use Illuminate\Http\Request;
use Laraspace\Http\Controllers\Controller;
use Laraspace\Tb_jns_pengiriman;
use Laraspace\Pengirim;
use Laraspace\Barang;

class DatamasterController extends Controller
{
    public function view()
    {
        $pengirims = Pengirim::all();
        $barangs = Barang::all();
        $jenispengirimans = Tb_jns_pengiriman::all();
        return view('admin.pages.datamaster.view')
            ->with('jenispengirimans', $jenispengirimans)
            ->with('pengirims', $pengirims)
            ->with('barangs', $barangs);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
