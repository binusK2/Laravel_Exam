<?php

namespace App\Http\Controllers;

use App\Models\Intel;
use Illuminate\Http\Request;

class IntelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $intels = Intel::get();
        return view('intel.intellist', ['intels' => $intels]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('intel.inteladd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $intelStatus = Intel::create([
            'i_tipe_processor' => $request->i_tipe_processor,
            'i_tipe_socket' => $request->i_tipe_socket,
            'i_deskripsi' => $request->i_deskripsi,
            'i_harga' => $request->i_harga,
        ]);

        if ($intelStatus) {
            $request->session()->has('success', 'Barang Berhasil Ditambahkan');
        } else {
            $request->session()->has('error', 'Opps, ada yang salah, Barang gagal ditambahkan');
        }
        return redirect('intel');
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
