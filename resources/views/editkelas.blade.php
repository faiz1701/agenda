@extends('layouts.main2')

@section('content')    
<!-- Sale & Revenue Start -->
<div class="container">
    <div class="row mt-4">
        <div class="col m-auto col-xl-6">
            <div class="bg-light rounded h-100 p-4 shadow">
                <h6 class="mb-4">Edit Data Kelas</h6>
                <form method="POST" action="/updatekelas/{{ $kelas->id }}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" name="nama" id="exampleInputEmail1" value="{{$kelas->nama}}" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Wali Kelas</label>
                        <select class="form-select" name="user_id">
                            <option selected>Wali Kelas</option>
                            @foreach ($datauser as $data)
                            @if ($data->level == 'guru')   
                            @if ($data->id == $kelas->user_id)
                            <option value="{{$data->id}}" selected>{{ $data->name }}</option>
                            @else
                            <option value="{{$data->id}}">{{ $data->name }}</option>
                                
                            @endif
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
@endsection