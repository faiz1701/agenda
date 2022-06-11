<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\User;
use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::select('kelas.*', 'users.*', 'kelas.id as id_kelas')
            ->leftJoin('users', 'kelas.user_id', 'users.id')
            ->paginate(5);
        return view('datakelas', [
            'datakelas' => $kelas
        ]);
    }

    public function create()
    {
        $datauser = User::all();
        return view('tambahkelas', compact('datauser'));
    }

    public function store(Request $request)
    {
        Kelas::create($request->all());
        return redirect('datakelas');
    }

    public function tampilan($id)
    {
        $kelas = Kelas::find($id);
        $datauser = User::all();
        return view('editkelas', [
            'kelas' => $kelas,
            'datauser' => $datauser
        ]);
    }

    public function update(Request $request, $id)
    {
        $kelas = Kelas::find($id);
        $kelas->update($request->all());
        return redirect('datakelas');
    }

    public function delete($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('datakelas');
    }
}
