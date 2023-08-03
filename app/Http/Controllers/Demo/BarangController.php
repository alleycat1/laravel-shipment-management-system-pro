<?php

namespace Laraspace\Http\Controllers\Demo;

use Illuminate\Http\Request;
use Laraspace\Http\Controllers\Controller;
use Laraspace\Barang;
use Laraspace\Pengirim;

class BarangController extends Controller
{
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
        $pengirims = Pengirim::all();
        return view('admin.pages.forms.barang')->with('pengirims', $pengirims);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barang = new Barang();
        $data = $this->validate($request, [
            'id_barang' => 'required',
            'jenis_barang' => 'required',
            'berat_barang' => 'required',
            'id_pengirim' => 'required',
            'jumlah_pcs' => 'required'
        ]);
        $barang->saveBarang($data);
        return redirect('/admin/datamaster/view')->with('success', 'New support barang has been created! Wait sometime to get resolved');
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
