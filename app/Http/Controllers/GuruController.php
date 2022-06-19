<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;


class GuruController extends Controller
{

    public function index()
    {
        $data = User::all();
        return view('dataguru', [
            'data' => $data
        ]);
    }

    public function create()
    {
        $datauser = User::all();
        return view('tambahguru', [
            'datauser' => $datauser
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'namaguru' => 'required',
            'nikguru' => 'required',
            'mapel_id' => 'required',
        ]);
        Guru::create($request->all());
        // dd($request->all());
        return redirect('dataguru');
    }

    public function tampilan($id)
    {
        $datauser = User::find($id);
        // return $datauser;
        return view('editguru', compact('datauser'));
    }

    public function update(Request $request, $id)
    {

        // dd($request->all());
        $data = User::find($id);
        $data->update([
            'tanggal_masuk' => $request->tanggal_masuk,
            'nama_barang' => $request->nama_barang,
            'stok_masuk' => $request->stok_masuk,

        ]);
        return redirect('dataguru');
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect('dataguru');
    }
}
