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
                        <th scope="col">Nama Guru</th>
                        <th scope="col">Username</th>
                        <th scope="col">NIK Guru</th>
                        <th scope="col">Mapel</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach($data as $index => $row)
                    @if ($row->level != 'admin')    
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $row->name }}</td>
                        <td>{{$row->email}}</td>
                        <td>{{ $row->nik }}</td>
                        <td>{{$row->mapel}}</td>
                        <td class="d-flex gap-1">
                            <a href="/tampilanguru/{{ $row->id }}" type="button"  class="btn btn-warning"><i class="las la-edit"></i></a>
                            <form action="/deleteguru/{{ $row->id }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger d-"><i class="las la-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endif 
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