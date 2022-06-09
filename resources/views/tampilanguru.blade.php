@extends('layouts.main')

@section('content')
<!-- As a heading -->
<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Data Agenda</span>
        <div class="ms-auto">
            <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-secondary">Log Out</button>
            </form>
        </div>
    </div>
</nav>
<div class="container">
    {{-- todo input agenda --}}
    <div class="row mt-4 mb-5">
        <div class="col-11 m-auto">
            <div class="bg-light rounded h-100 p-4 shadow">
                <h2 class="mb-4 text-center">Input Data Agenda</h2>
                <form method="POST" action="/insertdataview" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                        <input type="text" class="form-control" name="namaguru" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mapel</label>
                        <input type="text" class="form-control" name="mapel" id="exampleInputPassword1">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Materi Pembelajaran</label>
                        <input type="text" class="form-control" name="materipelajaran" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mulai Pembelajaran</label>
                        <input type="text" class="form-control" name="mulaipembelajaran" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Akhir Pembelajaran</label>
                        <input type="text" class="form-control" name="akhirpembelajaran" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Siswa Tidak Hadir</label>
                        <input type="text" class="form-control" name="siswatidakhadir" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kelas</label>
                        <input type="text" class="form-control" name="namakelas" id="exampleInputPassword1">

                    </div>
                    <label for="exampleInputPassword1" class="form-label">Jenis Pembelajaran</label>
                    <select class="form-select form-select mb-3" name="jenispembelajaran"
                        aria-label=".form-select-lg example">
                        <option selected>Jenis Pembelajaran</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                    </select>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Link Pembelajaran</label>
                        <input type="text" class="form-control" name="linkpembelajaran" id="exampleInputPassword1">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Dokumentasi</label>
                        <input type="file" class="form-control" name="dokumentasi" id="exampleInputPassword1">

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan" id="exampleInputPassword1">

                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    {{-- todo akhir input agenda --}}
    {{-- todo table agenda --}}
    <div class="row mt-5 mb-5">
        <div class="col-12">
            <div class="bg-light rounded h-100 p-4 mx-5 shadow mb-5">
                <h2 class="mb-4">Table Data Agenda</h2>
                <div class="table-responsive p-0">
                    <table class="table text-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Guru</th>
                                <th scope="col">Mapel</th>
                                <th scope="col">Materi Pembelajaran</th>
                                <th scope="col">Jam Mulai</th>
                                <th scope="col">Jam Berakhir</th>
                                <th scope="col">Siswa Tidak Hadir</th>
                                <th scope="col">Nama Kelas</th>
                                <th scope="col">Jenis Pembelajaran</th>
                                <th scope="col">Link Pembelajaran</th>
                                <th scope="col">Dokumentasi</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $no = 1;
                            @endphp
                            @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $no++ }}</th>
                                <td>{{$row->namaguru}}</td>
                                <td>{{$row->mapel}}</td>
                                <td>{{$row->materipelajaran}}</td>
                                <td>{{$row->mulaipembelajaran}}</td>
                                <td>{{$row->akhirpembelajaran}}</td>
                                <td>{{$row->siswatidakhadir}}</td>
                                <td>{{$row->namakelas}}</td>
                                <td>{{$row->jenispembelajaran}}</td>
                                <td>{{$row->linkpembelajaran}}</td>
                                <td>
                                    <img src="{{asset('Dokumentasi/' .$row->dokumentasi)}}" alt="" style="width: 90px;">
                                </td>
                                <td>{{$row->keterangan}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- todo akhir table agenda --}}
</div>
{{-- <div class="col-sm-10 m-auto mt-5">
    <div class="rounded h-100 p-4 shadow">
        <h2 class="mb-4 text-center"></h2>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div> --}}
@endsection