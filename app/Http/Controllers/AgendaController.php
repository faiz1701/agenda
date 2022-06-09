<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;



class AgendaController extends Controller
{
    public function index()
    {
        $agenda = Agenda::all();
        return view('dataagenda', compact('agenda'));
    }

    public function create()
    {
        return view('tambahagenda');
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
        return view('editagenda', compact('agenda'));
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
