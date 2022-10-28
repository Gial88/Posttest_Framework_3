<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Inventory;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InventoryController extends Controller
{
    public function index(){
        return view('home',["barang" => Inventory::all()]);
    }

    public function tambah(){
        $auth = Auth::user()->name;
        $member = Member::where('nama_member',$auth)->get();
        return view('create',[
            "id_member" => $member[0]['id'],
            "kategori" => Category::all()
        ]);
    } 

    public function simpan(Request $request){
    
        Inventory::create([
            'nama_barang' => $request->nama_brg,
            'jumlah_barang' => $request->jumlah_brg,
            'deskripsi_barang' => $request->deskripsi_brg,
            'category_id' => $request->kategori,
            'member_id' => $request->member,
        ]);

        return redirect()->route('home')->with('success', 'Data Berhasil Ditambah');

    }

    public function lihat(Inventory $id){
        return view('show',[
            'barang'=> $id
        ]);
    }
}
