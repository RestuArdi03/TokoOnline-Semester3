<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anggota;

class ControllerAnggota extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $anggota = Anggota::orderBy('id','desc')->get();
        return view('v_anggota.index', [
                        'judul'=>'Data Anggota',
                        'index'=>$anggota
                    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('v_anggota.create',[
            'judul'=>'Tambah Anggota'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //Debungging request data
        //dd($request);
        //atau untuk lebih banyak informasi debungging
        //ddd($request);
        $validateData=$request->validate([
            'nama'=>'required|max:255',
            'nim'=>'required|min:8|max:8',
            'kelas'=>'required|min:8|max:8',
            'hp'=>'required|min:10|max:13'
        ]);
        Anggota::create($validateData);
        return redirect('/anggota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //menampilkan data yang akan diedit
        $anggota=Anggota::find($id);
        return view('v_anggota.edit',[
            'judul'=>'Ubah Anggota',
            'edit'=>$anggota
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //menyimpan data yang sudah diedit
        $rules=[
            'nama'=>'required|max:100',
            'nim'=>'required|min:8|max:8',
            'kelas'=>'required|min:8|max:8',
            'hp'=>'required|min:10|max:13',];
        $validateData=$request->validate($rules);
        Anggota::where('id',$id)->update($validateData);
        return redirect('/anggota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //menghapus record
        $anggota=Anggota::findOrFail($id);
        $anggota->delete();
        return redirect('/anggota');
    }
}
