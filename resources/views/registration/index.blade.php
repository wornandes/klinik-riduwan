@extends('layouts.index')
@section('content')
<div class="page-heading">
    <h3>Daftar Antrian</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="mb-3">
                            
                        </div>
                         @if(session()->has('success'))
    <div class="alert alert-success  col-lg-8" role="alert">
      {{ session('success') }}
    </div>  
    @endif
                        <div class="table-responsive">
                            <table class="table" id="registration-table" width="100%">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal Periksa</th>
                                    <th>Tanggal Daftar</th>
                                    <th style="white-space: nowrap">Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($registrations as $key => $registration)
                                        <tr>
                                            <td>{{ $key + $registrations->firstItem() }}</td>
                                            <td>{{ $registration->patient->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($registration->check_date)->translatedFormat('l, d F Y') }}</td>
                                            <td>{{ \Carbon\Carbon::parse($registration->registration_date)->translatedFormat('l, d F Y') }}</td>
                                            <td> 
                                                <form action="/registration/{{$registration->id}}" method="get" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus antrian pasien ini?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="d-flex justify-content-end">

        {{ $registrations->links('pagination::bootstrap-4')}}
    </div>
</div>
@endsection

