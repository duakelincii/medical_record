@extends('master')
@foreach ($metadatas as $metadata)
    @section('judul_halaman')
        {{ $metadata->Judul }}
    @endsection
    @section('deskripsi_halaman')
        {{ $metadata->Deskripsi }}
    @endsection
@endforeach
@section('konten')

<?php $role = Auth::user()->profesi; ?>
@if ($role == 'Dokter')

<div class="row">
<!-- Jumlah Pasien Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <a href ="{{route('rm')}}" class="text-decoration-none card border-left-success shadow h-100 py-2">
      <div class="card-body">
        <div class="row no-gutters align-items-center">
          <div class="col mr-2">
            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Kunjungan</div>
            <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah['kunjungan']}}</div>
          </div>
          <div class="col-auto">
            <i class="fas fa-hands-helping fa-2x text-gray-300"></i>
          </div>
        </div>
      </div>
    </a>
  </div>

</div>

@elseif ($role == 'Staff')
<!-- Content Row -->
<div class="row">

    <!-- Jumlah Pasien Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <a href="{{route('pasien')}}"class="text-decoration-none card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pasien</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah['pasien']}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-address-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </a>
    </div>


    <!-- Jumlah Pasien Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <a href ="{{route('lab')}}" class="card border-left-info text-decoration-none shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Fasilitas Lab</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$jumlah['lab']}}</div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-x-ray fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- Jumlah Obat Terdaftar Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <a href ="{{route('obat')}}" class="text-decoration-none card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Obat Terdaftar</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah['obat']}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-briefcase-medical fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>

  @elseif ($role == 'Admin')
  <!-- Content Row -->
<div class="row">

    <!-- Jumlah Pasien Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <a href="{{route('pasien')}}"class="text-decoration-none card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah Pasien</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah['pasien']}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-address-book fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- Jumlah Pasien Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <a href ="{{route('rm')}}" class="text-decoration-none card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Kunjungan</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah['kunjungan']}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-hands-helping fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- Jumlah Pasien Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <a href ="{{route('lab')}}" class="card border-left-info text-decoration-none shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Fasilitas Lab</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$jumlah['lab']}}</div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-x-ray fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </a>
    </div>

    <!-- Jumlah Obat Terdaftar Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <a href ="{{route('obat')}}" class="text-decoration-none card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Jumlah Obat Terdaftar</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">{{$jumlah['obat']}}</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-briefcase-medical fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </a>
    </div>
  </div>

@endif






@endsection
