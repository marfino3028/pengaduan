<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data dari kategori
        $kategori = DB::table('kategori')->get();

        // mengirim data kategori ke view index
        return view('kategori.index',['kategori' =>$kategori]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    //method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
    DB::table('kategori')->insert([
        'nama' => $request->nama
       ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
    // $kategori = DB::table('kategori')->where('id',$id)->get();
       $kategori = kategori::find($id);
    // passing data pegawai yang didapat ke view edit.blade.php
    return view('kategori.show', compact('blog')) -> renderSections()['content'];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
            // menghapus data pegawai berdasarkan id yang dipilih
    DB::table('kategori')->where('id',$id)->delete();
        
    // alihkan halaman ke halaman pegawai
    return redirect('/kategori');
    }

    public function edit($id)
    {
        $kategori = DB::table('kategori')->where('id', $id)->get();
        return view ('/kategori/edit', compact('kategori'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // update data pegawai
    DB::table('kategori')->where('id',$request->id)->update([
        'nama' => $request->nama
        ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/kategori');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
    //DB::table('kategori')->where('id',$id)->delete();
        
    // alihkan halaman ke halaman pegawai
    //return redirect('/kategori');
    }
}
