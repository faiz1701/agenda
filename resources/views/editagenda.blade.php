@extends('layouts.main2')

@section('content')    
<!-- Sale & Revenue Start -->
<div class="container">
    <div class="row mt-4 mb-4">
        <div class="col m-auto col-xl-6">
            <div class="bg-light rounded h-100 p-4 shadow">
                <h6 class="mb-4">Edit Data Agenda</h6>
                <form method="POST" action="/updateagenda/{{$agenda->id}}" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Guru</label>
                        <select class="form-select" name="user_id">
                            <option selected>Wali Kelas</option>
                            @foreach ($datauser as $data)
                            @if ($data->level == 'guru')   
                            @if ($data->id == $agenda->user_id)
                            <option value="{{$data->id}}" selected>{{ $data->name }} ({{$data->mapel}})</option>
                            @else
                            <option value="{{$data->id}}">{{ $data->name }}</option>
                                
                            @endif
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Materi Pembelajaran</label>
                        <input type="text" class="form-control" value="{{ $agenda->materipelajaran }}"
                            name="materipelajaran" id="exampleInputPassword1">
                        @error('materipebelajaran')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Mulai Pembelajaran</label>
                        <input type="text" class="form-control" value="{{ $agenda->mulaipembelajaran }}"
                            name="mulaipembelajaran" id="exampleInputPassword1">
                        @error('mulaipembelajaran')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Akhir Pembelajaran</label>
                        <input type="text" class="form-control" value="{{ $agenda->akhirpembelajaran }}"
                            name="akhirpembelajaran" id="exampleInputPassword1">
                        @error('akhirpembelajaran')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Siswa Tidak Hadir</label>
                        <input type="text" class="form-control" value="{{ $agenda->siswatidakhadir }}"
                            name="siswatidakhadir" id="exampleInputPassword1">
                        @error('siswatidakhadir')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Nama Kelas</label>
                        <select class="form-select" name="user_id">
                            <option selected>Wali Kelas</option>
                            @foreach ($datakelas as $data)
                            @if ($data->id == $agenda->kelas_id)
                            <option value="{{$data->id}}" selected>{{ $data->nama }}</option>
                            @else
                            <option value="{{$data->id}}">{{ $data->nama }}</option>
                                
                            @endif
                            @endforeach
                        </select>
                    </div>
                    <label for="exampleInputPassword1" class="form-label">Jenis Pembelajaran</label>
                    <select class="form-select form-select mb-3" aria-label=".form-select-lg example">
                        <option selected>{{ $agenda->jenispembelajaran }}</option>
                        <option value="online">Online</option>
                        <option value="offline">Offline</option>
                        @error('jenispembelajaran')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </select>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Link Pembelajaran</label>
                        <input type="text" class="form-control" value="{{ $agenda->linkpembelajaran }}"
                            name="linkpembelajaran" id="exampleInputPassword1">
                        @error('linkpembelajaran')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Dokumentasi</label>
                        <input type="file" class="form-control" name="dokumentasi" value="{{ $agenda->dokumentasi }}">
                        @error('dokumentasi')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Keterangan</label>
                        <input type="text" class="form-control" value="{{ $agenda->keterangan }}"
                            name="keterangan" id="exampleInputPassword1">
                        @error('keterangan')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
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