<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;


class GuruController extends Controller
{

    public function index()
    {
        $data = Guru::all();
        return view('dataguru', compact('data'));
    }

    public function create()
    {
        return view('tambahguru');
    }

    public function store(Request $request)
    {
        Guru::create($request->all());
        // dd($request->all());
        return redirect('dataguru');
    }

    public function tampilan($id)
    {
        $data = Guru::find($id);
        return view('editguru', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = Guru::find($id);
        $data->update($request->all());
        // dd($request->all());
        return redirect('dataguru');
    }

    public function delete($id)
    {
        $data = Guru::find($id);
        $data->delete();
        return redirect('dataguru');
    }
}
