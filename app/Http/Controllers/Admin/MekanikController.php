<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Mekanik;
use Illuminate\Http\Request;

class MekanikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createlm()
    {
     
        $mekanik = Mekanik::selectRaw("        
            mekanik.id as id,
            mekanik.day as day,
            mekanik.jmlkonsumen as jmlkonsumen,
            mekanik.jservice as jservice,
            mekanik.jkerusakan as jkerusakan,
            mekanik.tukangmekanik as tukangmekanik,
            mekanik.status as status             
        ")->get();

        return view('admin.input4.createlm', compact('mekanik'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporanmk()
    {
        $mekanik = Mekanik::all();
        return view('admin.laporanmk', compact('mekanik'));
    }

    public function cetaklm()
    {
        $mekanik = Mekanik::all();
        return view('admin.cetaklm', compact('mekanik'));
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
            'day' => 'required',
            'jmlkonsumen' => 'required',
            'jservice' => 'required',
            'jkerusakan' => 'required',
            'tukangmekanik' => 'required',     
            'status' => 'required',            
        ]);

        $mekanik = Mekanik::create([
            'day' => $request->day,
            'jmlkonsumen' => $request->jmlkonsumen,
            'jservice' => $request->jservice,
            'jkerusakan' => $request->jkerusakan,
            'tukangmekanik' => $request->tukangmekanik,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.input4.createlm')->with('status', 'Laporan Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mekanik  $mekanik
     * @return \Illuminate\Http\Response
     */
    public function showlm()
    {
        $mekanik = Mekanik::all();
        return view('admin.input4.showlm', compact('mekanik'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mekanik  $mekanik
     * @return \Illuminate\Http\Response
     */
    public function editlm(Mekanik $mekanik)
    {
        return view('admin.input4.editlm', compact('mekanik'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mekanik  $mekanik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        Mekanik::where("id", $id)
        ->update([
            'day' => $request->day,
            'jmlkonsumen' => $request->jmlkonsumen,
            'jservice' => $request->jservice,
            'jkerusakan' => $request->jkerusakan,
            'tukangmekanik' => $request->tukangmekanik,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.input4.editlm', $id)->with('status', 'Laporan berhasil Diupdate');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mekanik  $mekanik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mekanik $mekanik)
    {
        $mekanik->delete();
        return redirect()->route('admin.input4.showlm')->with('status', 'Laporan Berhasil Dihapus!');
    }
}
