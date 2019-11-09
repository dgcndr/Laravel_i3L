<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Datamahasiswa;

class DatamahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datamahasiswa=Datamahasiswa::orderBy('nim','DESC')->paginate(5);
        
        return view('datamahasiswa/index',compact('datamahasiswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('datamahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'min:2',
            'alamat'=>'min:2',
            'jurusan'=>'min:2'
        ]);
        Datamahasiswa::create($request->all());
        return redirect()->route('datamahasiswa.index')->with('message','Data Berhasil Ditambahkan');
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
        $datamahasiswa=Datamahasiswa::findOrFail($id);
        return view('datamahasiswa.edit',compact('datamahasiswa'));
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
        $this->validate($request,[
            'nama'=>'min:2',
            'alamat'=>'required',
            'jurusan'=>'required'
        ]);
        $datamahasiswa=Datamahasiswa::findOrFail($id);
        $datamahasiswa->update($request->all());
        return redirect()->route('datamahasiswa.index')->with('message','Data Telah Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $datamahasiswa=Datamahasiswa::findOrFail($id);
        $datamahasiswa->delete();
        return redirect()->route('datamahasiswa.index')->with('message','Data Telah Dihapus');
    }
}
