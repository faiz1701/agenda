@extends('layouts.main2')

@section('content')
<!-- Sale & Revenue Start -->
<div class="container-fluid pt-4 px-4">
    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">
            <a href="/dataguru">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="las la-user-tie la-3x text-primary"></i>
                    <div class="ms-3">
                        <h6 class="mb-0">Data Guru</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3">
            <a href="/datakelas">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="las la-school la-3x text-primary"></i>
                    <div class="ms-3">
                        <h6 class="mb-0">Data Kelas</h6>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-sm-6 col-xl-3">
            <a href="/dataagenda">
                <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                    <i class="las la-list la-3x text-primary"></i>
                    <div class="ms-3">
                        <h6 class="mb-0">Data Agenda</h6>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
<!-- Sale & Revenue End -->
@endsection
