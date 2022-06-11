<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Guru;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::select('agendas.*', 'kelas.*', 'agendas.id as id_agenda', 'users.*')
            ->leftJoin('users', 'users.id', 'agendas.user_id')
            ->leftJoin('kelas', 'kelas.id', 'agendas.kelas_id')->get();
        // dd($agenda);
        return view('dataagenda', compact('agenda'));
    }

    public function create()
    {
        $datauser = User::all();
        $datakelas = Kelas::all();
        return view('tambahagenda', compact('datauser', 'datakelas'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        // return $request;
        $agenda = Agenda::create($request->all());
        if ($request->hasFile('dokumentasi')) {
            $request->file('dokumentasi')->move('Dokumentasi/', $request->file('dokumentasi')->getClientOriginalName());
            $agenda->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $agenda->save();
        }
        return redirect('dataagenda');
    }

    public function tampilan($id)
    {
        $agenda = Agenda::find($id);
        $datakelas = Kelas::all();
        $datauser = User::all();
        // dd($agenda);
        return view('editagenda', compact('agenda', 'datakelas', 'datauser'));
    }

    public function update(Request $request, $id)
    {
        $agenda = Agenda::find($id);
        $agenda->update();
        $agenda->update($request->all());
        if ($request->hasFile('dokumentasi')) {
            $request->file('dokumentasi')->move('Dokumentasi/', $request->file('dokumentasi')->getClientOriginalName());
            $agenda->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $agenda->save();
        }
        return redirect('dataagenda');
    }

    public function delete($id)
    {
        $agenda = Agenda::find($id);
        $agenda->delete();
        return redirect('dataagenda');
    }
}
