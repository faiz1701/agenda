@extends('layouts.main2')

@section('content')    
{{-- button tambah --}}
<div class="my-5 mx-5">
    <a type="button" href="/tambahagenda" class="btn btn-success shadow">Tambah +</a>
</div>
{{-- end button tambah --}}

<!-- Sale & Revenue Start -->
<div class="row">
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
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($agenda as $row)
                        <tr>
                            <th scope="row">{{ $no++ }}</th>
                            <td>{{$row->name}}</td>
                            <td>{{$row->mapel}}</td>
                            <td>{{$row->materipelajaran}}</td>
                            <td>{{$row->mulaipembelajaran}}</td>
                            <td>{{$row->akhirpembelajaran}}</td>
                            <td>{{$row->siswatidakhadir}}</td>
                            <td>{{$row->nama}}</td>
                            <td>{{$row->jenispembelajaran}}</td>
                            <td>{{$row->linkpembelajaran}}</td>
                            <td>
                                <img src="{{asset('Dokumentasi/' .$row->dokumentasi)}}" alt=""
                                    style="width: 90px;">   
                            </td>
                            <td>{{$row->keterangan}}</td>
                            <td>
                                <a href="/tampilanagenda/{{ $row->id_agenda }}"
                                    class="btn btn-warning"><i class="las la-edit"></i></a>
                                <a href="/deleteagenda/{{ $row->id_agenda }}" class="btn btn-danger"><i
                                        class="las la-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->
@endsection