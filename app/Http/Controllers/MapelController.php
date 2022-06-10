<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index()
    {
        $mapel = Mapel::all();
        return view('datamapel', compact('mapel'));
    }

    public  function create()
    {
        return view('tambahmapel');
    }

    public function store(Request $request)
    {
        Mapel::create($request->all());
        return redirect('datamapel');
    }

    public function tampilan($id)
    {
        $mapel = Mapel::find($id);
        return view('editmapel', compact('mapel'));
    }

    public function update(Request $request, $id)
    {
        $mapel = Mapel::find($id);
        $mapel->update($request->all());
        return redirect('datamapel');
    }

    public function delete($id)
    {
        $mapel = Mapel::find($id);
        $mapel->delete();
        return redirect('datamapel');
    }
}
