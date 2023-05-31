@extends('layouts.index')
@section('content')
<div class="page-heading">
    <h3>Daftar Pasien</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="mb-3">
                            <a class="btn btn-primary" href="{{ url('/patient/add') }}">Tambah Pasien
                                </a>
                        </div>
                         @if(session()->has('success'))
                        <div class="alert alert-success  col-lg-8" role="alert">
                        {{ session('success') }}
                        </div>  
                        @endif

                        

                        <form action="/patient/search" method="GET">
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search .." value="{{ old('search') }}">
                        <button class="btn btn-danger" type="submit">Search</button>
                        </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table" id="patient-table" width="100%">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>No telepon</th>
                                    <th style="white-space: nowrap">Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($patients as $key => $patient)
                                        <tr>
                                            <td>{{ $key + $patients->firstItem() }}</td>
                                            <td>{{ $patient->name }}</td>
                                            <td>{{ \Carbon\Carbon::parse($patient->birthdate)->translatedFormat('l, d F Y') }}</td>
                                            <td>{{ $patient->sex }}</td>
                                            <td>{{ $patient->phone }}</td>
                                            <td style="white-space: nowrap"><a class="btn btn-info"
                                                    href="{{ '/patient/' . $patient->id . '/detail' }}">
                                                    Detail
                                                </a>
                                                <a class="btn btn-secondary"
                                                    href="{{ '/patient/' . $patient->id . '/edit' }}">
                                                    Edit
                                                </a>
                                                <a class="btn btn-primary"
                                                    href="{{ '/registration/' . $patient->id . '/add' }}">
                                                    Tambah Antrian
                                                </a>
                                                <form action="/patient/{{$patient->id}}" method="get" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus pasien ini?')">Delete</button>
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

        {{ $patients->links('pagination::bootstrap-4')}}
        </div>
</div>
@endsection
