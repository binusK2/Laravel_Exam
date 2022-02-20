<?php

namespace App\Http\Controllers;

use App\Models\Amd;
use App\Models\Intel;
use App\Models\Motherboard;
use App\Models\Pilihanuser;
use App\Models\Ps;
use App\Models\Ram;
use App\Models\Vga;
use DB;

use Illuminate\Http\Request;

class RakitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nama_amds = Amd::select('id', 'a_tipe_processor', 'a_deskripsi')->get();
        $nama_intels = Intel::select('i_tipe_processor', 'i_deskripsi')->get();
        $nama_motherboards = Motherboard::select('merk', 'nama')->get();
        $nama_rams = Ram::select('merk', 'nama')->get();
        $nama_vgas = Vga::select('merk', 'nama')->get();
        $nama_ps = Ps::select('merk', 'nama')->get();
       

        return view(
            'rakit.addrakit',
            [
                'nama_amds' => $nama_amds,
                'nama_intels' => $nama_intels,
                'nama_motherboards' => $nama_motherboards,
                'nama_rams' => $nama_rams,
                'nama_vgas' => $nama_vgas,
                'nama_ps' => $nama_ps,
            ]      
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rakit.addrakit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pilihanuser::create([
            'processor' => $request->processor,
            'motherboard' => $request->motherboard,
            'vga' => $request->vga,
            'ram' => $request->ram,
            'power' => $request->power,
            'user' => $request->user
        ]);
        return redirect('listrakit');
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
