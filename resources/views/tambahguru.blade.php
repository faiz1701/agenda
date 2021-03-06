@extends('layouts.main2')

@section('content')
<!-- Sale & Revenue Start -->
<div class="container">
    <div class="row mt-4 mb-4">
        <div class="col m-auto col-xl-6">
            <div class="bg-light rounded h-100 p-4 shadow">
                <h6 class="mb-4">Input Data Guru</h6>
                <form method="POST" action="/create-guru">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">NIK Guru</label>
                        <input type="number" class="form-control" name="nik" id="exampleInputPassword1">
                        @error('nik')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mata Pelajaran</label>
                        <input type="text" class="form-control" name="mapel" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
@endsection