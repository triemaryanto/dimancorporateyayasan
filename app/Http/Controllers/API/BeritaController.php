<?php

namespace App\Http\Controllers\API;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        $data = Kategori::query()->join('beritas', 'beritas.kategori_id', '=', 'kategoris.id');

        return $data->when(request('search'), function ($query) {
            $query->where(request('searchField'), 'like', '%' . request('search') . '%');
        })->orderBy('kategoris.id', 'Desc')->paginate(5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi_berita' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png',
            'kategori_id' => 'required|max:3',
        ]);
        if ($request->file('gambar')) {
            $gambar = $request->file('gambar');
            $ext = $gambar->extension();
            $imageName = date('mdYHis') . uniqid() . '.' . $ext;
            $desinationPath = public_path() . '/images';
            $gambar->move($desinationPath, $imageName);
        }
        $data = Berita::create([
            'judul' => $request->judul,
            'isi_berita' => $request->isi_berita,
            'gambar' => env('APP_URL') . 'images/' . $imageName,
            'kategori_id' => $request->kategori_id,
        ]);
        return  response()->json(['message' => 'Image has been sucessfully saved', 'data' => $data]);
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ubah(Request $request, $id)
    {
        $image = Berita::find($id);
        if ($request->file('gambar')) {
            unlink($image->gambar);
            $gambar = $request->file('gambar');
            $ext = $gambar->extension();
            $imageName = env('APP_URL') . 'images/' . date('mdYHis') . uniqid() . '.' . $ext;
            $desinationPath = public_path() . '/images';
            $gambar->move($desinationPath, $imageName);
        } else {
            $imageName = $image->gambar;
        }
        $data = [
            'judul' => $request->judul,
            'isi_berita' => $request->isi_berita,
            'gambar' => $imageName,
            'kategori_id' => $request->kategori_id,
        ];
        $ubah = Berita::findOrFail($id);
        $ubah->update($data);
    }
    public function destroy($id)
    {
        $hapus = Berita::find($id);
        unlink($hapus->gambar);
        $hapus->delete();
    }
}
