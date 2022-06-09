<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use Illuminate\Http\Request;

class TampilanController extends Controller
{
    public function index()
    {
        $data = Agenda::all();
        // dd($data);   
        return view('tampilanguru', [
            'data' => $data
        ]);
    }


    public function store(Request $request)
    {
        $data = agenda::create($request->all());
        if ($request->hasFile('dokumentasi')) {
            $request->file('dokumentasi')->move('Dokumentasi/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect('viewguru');
    }
}
