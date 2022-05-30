<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jenis;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createjenis()
    {
        $jenis = Jenis::all();
        return view('admin.input3.createjenis', compact('jenis'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'waktu' => 'required',                  
        ]);

        $jenis=Jenis::create([
            'nama'=>$request->nama,
            'waktu'=>$request->waktu,
        ]);

        return redirect()->route('admin.input3.createjenis')->with('status', 'Data jenis ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function showjenis()
    {
        $jenis = Jenis::all();
        return view('admin.input3.showjenis', compact('jenis'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function editjenis(Jenis $jenis)
    {
        return view('admin.input3.editjenis', compact('jenis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Jenis::where("id", $id)
        ->update([

            'nama' => $request->nama,
            'waktu' => $request->waktu,

        ]);
      
        return redirect()->route('admin.input3.editjenis', $id)->with('status', 'Data Jenis service berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenis  $jenis
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenis $jenis)
    {
        $jenis->delete();
        return redirect()->route('admin.input3.showjenis')->with('status', 'Data berhasil dihapus!');
    }
}
