<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
public function create()
{
    return view('pelanggan.form1');
}

public function store(Request $request, Pelanggan $pelanggan = null)
{
    
    $rules = [
        'nomor' => 'required',
        'uraian' => 'required',
        'kode' => 'required',
        'satuan' => 'required',
        'koefisien' => 'required',
        'harga' => 'required',
        'jumlah_harga' => 'required'
    ];

    $this->validate($request, $rules);

    $input = $request->all();
    
    Pelanggan::updateOrcreate(['id'=> @$pelanggan->id], $input);
    return redirect('/pelanggan')->with('success', 'Data Berhasil Disimpan');
}
    
public function index(Request $request){
    $q = $request->get('q');

    $data['result'] = Pelanggan::where(function($query) use ($q){
        $query->where('nomor', 'like', '%' . $q . '%');
        $query->where('uraian', 'like', '%' . $q . '%');
        $query->where('kode', 'like', '%' . $q . '%');
        $query->where('satuan', 'like', '%' . $q . '%');
        $query->where('koefisien', 'like', '%' . $q . '%');
        $query->where('harga', 'like', '%' . $q . '%');
        $query->where('jumlah_harga', 'like', '%' . $q . '%');
    })->paginate();

    $data['q'] = $q;
    return view('pelanggan.list1',$data);
    }

public function edit(Pelanggan $pelanggan){
return view('pelanggan.form1', compact('pelanggan'));
}

public function destroy(Pelanggan $pelanggan){
$pelanggan->delete();
return redirect('/pelanggan')->with('success', 'Data Berhasil Dihapus');
}
}