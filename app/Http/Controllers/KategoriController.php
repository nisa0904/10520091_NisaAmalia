<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function create(){
        return view('kategori.form2');
    }

    public function store(Request $request, Kategori $kategori = null){
        $rules = [
            'nama_kategori' => 'required',
        ];
        $this->validate($request, $rules);
        Kategori::updateOrcreate(['id' => @$kategori->id], $request->all());

        return redirect('/kategori')->with('succes', 'Data Berhasil Disimpan');
    }
    public function index(Request $request)
    {   
        $q = $request->get('q');

        $data['result'] = Kategori::where(function($query) use ($q){
            $query->where('nama_kategori', 'like', '%' . $q . '%');
        })->paginate();

        $data['q'] = $q;
        return view('kategori.list2',$data);
    }
   public function edit(Kategori $kategori){
    return view('kategori.form2', compact('kategori'));
   }

   public function destroy(Kategori $kategori){
    $kategori->delete();
    return redirect('/kategori')->with('success', 'Data Berhasil Dihapus');
   }
}