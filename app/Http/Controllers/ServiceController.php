<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Dataservice;
use App\Models\Jadwal;
use App\Models\Jenis;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function service()
    {
        $jenis = Jenis::all();
        $service = Service::with('jenis')->get();

        return view('user.service', compact('jenis', 'service'));
    }

    public function konsumen()
    {
        // dd("masuk");
        $service = Service::selectRaw("
          service.nama as nama,
          service.alamat as alamat,
          service.no as no,
          service.waktu as waktu,
          service.tanggal as tanggal,
          service.jservice as jservice,  
          service.kendala as kendala,
          jenisservice.kendala as kendala,
          jenisservice.waktu as lama_proses,
          jenisservice.nama as jenis
         ")->join("jenisservice", "service.id_jenis", "=", "jenisservice.id")
            ->orderBy("jenisservice.waktu", "ASC")
            ->get();

        return view('user.konsumenservice', compact('service'));
    }

    public function jadwalservice()
    {
        $jadwal = Jadwal::with(["service", "jenis"])->get();
        // dd($jadwal);
        return view('user.jadwalservice', compact('jadwal'));
    }

    public function contact()
    {
        return view('user.contact');
    }

    public function selesai()
    {
        // dd("masuk");
        $service = Service::selectRaw("
          service.nama as nama,
          service.alamat as alamat,
          service.no as no,
          service.waktu as waktu_tiba,
          service.tanggal as tanggal,
          service.jservice as jservice,
          service.plat as plat,
          service.kendala as kendala,
          service.status as status, 
          service.keterangan as keterangan,
          service.jam as waktu_selesai,
          jenisservice.waktu as lama_proses,
          jenisservice.nama as jenis
          ")->join("jenisservice", "service.id_jenis", "=", "jenisservice.id")
            ->orderBy("jenisservice.waktu", "ASC")
            ->get();
        $dataservice = Dataservice::all();
        return view('user.selesaiservice', compact('service', 'dataservice'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function dataservice()
    // {
    //     $service = Service::all();
    //     return view('user.dataservice', compact('service'));
    // }

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
            'alamat' => 'required',
            'no' => 'required',
            'waktu' => 'required',
            'tanggal' => 'required',
            'jservice' => 'required',
            'plat' => 'required',
            'id_jenis' => 'required',
            'kendala' => 'required',
        ]);

        $service = Service::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no' => $request->no,
            'waktu' => $request->waktu,
            'tanggal' => $request->tanggal,
            'jservice' => $request->jservice,
            'plat' => $request->plat,
            'id_jenis' => $request->id_jenis,
            'kendala' => $request->kendala,
            'status' => "Terdaftar",
            'keterangan' => "Menunggu di proses",
            'jam' => null,
        ]);

        return redirect()->route('user.service')->with('status', 'anda berhasil mendaftar!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
}
