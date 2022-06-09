@extends('layouts.main2')

@section('content')    
<!-- Sale & Revenue Start -->
<div class="container">
    <div class="row mt-4 mb-4">
        <div class="col m-auto col-xl-6">
            <div class="bg-light rounded h-100 p-4 shadow">
                <h6 class="mb-4">Input Data Agenda</h6>
                <form method="POST" action="/insertagenda" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" name="materipelajaran"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mulai Pembelajaran</label>
                        <input type="text" class="form-control" name="mulaipembelajaran"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Akhir Pembelajaran</label>
                        <input type="text" class="form-control" name="akhirpembelajaran"
                            id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Siswa Tidak Hadir</label>
                        <input type="text" class="form-control" name="siswatidakhadir"
                            id="exampleInputPassword1">
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
                        <input type="text" class="form-control" name="linkpembelajaran"
                            id="exampleInputPassword1">
                            
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Dokumentasi</label>
                        <input type="file" class="form-control" name="dokumentasi"
                            id="exampleInputPassword1">
                            
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" name="keterangan"
                            id="exampleInputPassword1">
                            
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
@endsection