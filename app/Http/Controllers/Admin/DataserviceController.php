<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dataservice;
use App\Models\Service;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class DataserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dataservice()
    {
        $dataservice = Dataservice::all();
        return view('admin.dataservice', compact('dataservice'));
    }

    public function cetak()
    {
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
        
        return view('admin.input1.cetak', compact('service'));
    }

    public function datakonsumen1()
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

        // dd($service);
        return view('admin.datakonsumen1', compact('service'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd("masuk");
        $service = Service::selectRaw("
            service.id as id,
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
        return view('admin.input1.createkonsumen', compact('dataservice', 'service'));
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
            'status' => 'required',
            'keterangan' => 'required',
            'jam' => 'required',
        ]);

        $dataservice = Dataservice::create([
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'jam' => $request->jam,
        ]);

        return redirect()->route('admin.input1.createkonsumen')->with('status', 'Konsumen service ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataservice  $dataservice
     * @return \Illuminate\Http\Response
     */
    public function show(Dataservice $dataservice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataservice  $dataservice
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataservice $dataservice)
    {
        // menggunakan route model binding
        return view('admin.input1.edit', compact('dataservice'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataservice  $dataservice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // dd($request->id);
        $id  = $request->id;
        Service::where("id", $id)
            ->update([
                'status' => $request->status,
                'keterangan' => $request->keterangan,
                'jam' => $request->jam ?? null,
            ]);

        return redirect()->route('admin.input1.createkonsumen')->with('status', 'Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataservice  $dataservice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {

        $service->delete();
        return redirect()->route('admin.input1.createkonsumen')->with('status', 'Data berhasil dihapus!');
    }
}
