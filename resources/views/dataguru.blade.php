@extends('layouts.main2')

@section('content')    
{{-- button tambah --}}
<div class="my-5 mx-5">
    <a type="button" href="/tambahguru" class="btn btn-success shadow">Tambah +</a>
</div>
{{-- end button tambah --}}

<!-- Sale & Revenue Start -->
<div class="col-12">
    <div class="bg-light rounded h-100 p-4 mx-5 shadow">
        <h2 class="mb-4">Table Data Guru</h2>
        <div class="table-responsive">
            <table class="table text-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Nama Guru</th>
                        <th scope="col">NIK Guru</th>
                        <th scope="col">Mapel</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $row)    
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{$row->username}}</td>
                        <td>{{$row->password}}</td>
                        <td>{{$row->namaguru}}</td>
                        <td>{{$row->nikguru}}</td>
                        <td>{{$row->mapel}}</td>
                        <td>
                            <a href="/tampilanguru/{{ $row->id }}" type="button"  class="btn btn-warning"><i class="las la-edit"></i></a>
                            <a href="/deleteguru/{{ $row->id }}" type="button" class="btn btn-danger"><i class="las la-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->
</div>
<!-- Content End -->
@endsection