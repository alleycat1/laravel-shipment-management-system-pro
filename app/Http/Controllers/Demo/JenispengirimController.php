<?php

namespace Laraspace\Http\Controllers\Demo;

use Illuminate\Http\Request;
use Laraspace\Http\Controllers\Controller;
use Laraspace\Tb_jns_pengiriman;

class JenispengirimController extends Controller
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
        return view('admin.pages.forms.jenispengiriman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // code
        $jenispengiriman = new Tb_jns_pengiriman();
        $data = $this->validate($request, [
            'kd_pengiriman' => 'required',
            'nm_jns_pengiriman' => 'required',
            'harga_per_km' => 'required'
        ]);
        $jenispengiriman->saveJenispengiriman($data);
        // return redirect()->action('${App\Http\Controllers\HomeController@index}', ['parameterKey' => 'value']);
        return redirect('/admin/datamaster/view')->with('success', 'New support type sending has been created! Wait sometime to get resolved');
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
