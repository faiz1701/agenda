<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('datakelas', compact('kelas'));
    }

    public function create()
    {
        return view('tambahkelas');
    }

    public function store(Request $request)
    {
        Kelas::create($request->all());
        return redirect('datakelas');
    }

    public function tampilan($id)
    {
        $kelas = Kelas::find($id);
        return view('editkelas', compact('kelas'));
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
