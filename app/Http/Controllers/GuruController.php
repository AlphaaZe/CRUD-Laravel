<?php

namespace App\Http\Controllers;

use App\Models\guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index(){
        $data = guru::all();
        return view('dataguru', compact('data'));
    }
    public function tambahguru(){
        return view('tambahguru');
    }
    public function inputguru(Request $request){
        guru::create($request->all());
        return redirect()->route('guru');
    }
    public function tampilguru($id){
        $data = guru::find($id);
        return view('tampilguru', compact('data'));
    }
    public function updateguru(Request $request, $id){
        $data = guru::find($id);
        $data -> update($request->all());
        return redirect()->route('guru');
    }
    public function hapus($id){
        $data = guru::find($id);
        $data -> delete();
        return redirect('guru');
    }
}
