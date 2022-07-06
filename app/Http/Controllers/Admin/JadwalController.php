<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use App\Models\Jenis;
use App\Models\Service;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jadwaladmin()
    {
        $jadwal = Jadwal::all();
        return view('admin.jadwaladmin', compact('jadwal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createjadwal()
    {
        $jadwal = Jadwal::all();
        $service = Service::all();
        $jenis = Jenis::all();
        return view('admin.input2.createjadwal', compact('jadwal', 'service', 'jenis'));
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
            'hari' => 'required',
            'tanggal' => 'required',
            'kuota' => 'required',
            'mekanik' => 'required',                  
        ]);

        $jadwal=Jadwal::create([
            'hari'=>$request->hari,
            'tanggal'=>$request->tanggal,
            'kuota'=>$request->kuota,
            'mekanik'=>$request->mekanik,
        ]);

        return redirect()->route('admin.input2.createjadwal')->with('status', 'Jadwal service ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $jadwal = Jadwal::all();
        return view('admin.input2.show', compact('jadwal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function editjadwal(Jadwal $jadwal)
    {
        
        return view('admin.input2.editjadwal', compact('jadwal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        Jadwal::where("id", $id)
        ->update([

            'hari' => $request->hari,
            'tanggal' => $request->tanggal,
            'kuota' => $request->kuota,
            'mekanik' => $request->mekanik,
        ]);
      
        return redirect()->route('admin.input2.editjadwal', $id)->with('status', 'Data Jadwal berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();
        return redirect()->route('admin.input2.show')->with('status', 'Data berhasil dihapus!');
    }
}
