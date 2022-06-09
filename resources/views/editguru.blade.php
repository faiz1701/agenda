@extends('layouts.main2')

@section('content')    
<!-- Sale & Revenue Start -->
<div class="container">
    <div class="row mt-4 mb-4">
        <div class="col m-auto col-xl-6">
            <div class="bg-light rounded h-100 p-4 shadow">
                <h6 class="mb-4">Edit Data Guru</h6>
                <form method="POST" action="/updateguru/{{ $data->id }}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="email" class="form-control" name="username" id="exampleInputEmail1" value="{{$data->username}}" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control"  value="{{$data->password}}" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Guru</label>
                        <input type="text" class="form-control"  value="{{$data->namaguru}}" name="namaguru" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NIK Guru</label>
                        <input type="number" value="{{$data->nikguru}}" class="form-control" name="nikguru" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
                        <input type="text" class="form-control" value="{{$data->mapel}}" name="mapel" id="exampleInputPassword1">
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