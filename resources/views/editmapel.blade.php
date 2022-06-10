@extends('layouts.main2')

@section('content')    
<!-- Sale & Revenue Start -->
<div class="container">
    <div class="row mt-4">
        <div class="col m-auto col-xl-6">
            <div class="bg-light rounded h-100 p-4 shadow">
                <h6 class="mb-4">Edit Data Mapel</h6>
                <form method="POST" action="/updatemapel/{{ $mapel->id }}">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Mapel</label>
                        <input type="text" class="form-control" name="mapel" id="exampleInputEmail1" value="{{$mapel->mapel}}" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
@endsection