@extends('layouts.main2')

@section('content')    
<!-- Sale & Revenue Start -->
<div class="container">
    <div class="row mt-4 mb-4">
        <div class="col m-auto col-xl-6">
            <div class="bg-light rounded h-100 p-4 shadow">
                <h6 class="mb-4">Edit Data Guru</h6>
                <form method="POST" action="/updateguru/{{ $datauser->id }}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Username</label>
                        <input type="text" class="form-control"  value="{{$datauser->name}}" name="name" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">email</label>
                        <input type="text" class="form-control"  value="{{$datauser->email}}" name="email" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NIK Guru</label>
                        <input type="number" value="{{$datauser->nik}}" class="form-control" name="nik" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
                        <input type="text" class="form-control" value="{{$datauser->mapel}}" name="mapel" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Content End -->
@endsection