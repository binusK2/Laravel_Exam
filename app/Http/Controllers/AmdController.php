<?php

namespace App\Http\Controllers;

use App\Models\Amd;
use Illuminate\Http\Request;
use Symfony\Component\Console\Output\ConsoleOutput;

class AmdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $amds = Amd::get();
        return view('amd.amdlist', ['amds' => $amds]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('amd.amdadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $amdStatus = Amd::create([
            'a_tipe_processor' => $request->a_tipe_processor,
            'a_tipe_socket' => $request->a_tipe_socket,
            'a_deskripsi' => $request->a_deskripsi,
            'a_harga' => $request->a_harga,
        ]);

        if ($amdStatus) {
            $request->session()->exists('success', 'Product successfully added');
        } else {
            $request->session()->exists('error', 'Oops something went wrong, Product not saved');
        }
        return redirect('amd');
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
        $amd = Amd::find($id);
        $amd->delete();
        return redirect('/amd');
    }
}
