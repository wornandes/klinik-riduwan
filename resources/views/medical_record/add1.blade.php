@extends('layouts.index')
@section('content')
<div class="page-heading">
    <h3>Daftar Pasien Menu Dokter</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">

                        <form action="/medical_record/search" method="GET">
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
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $patient->name }}</td>
                                            <td>{{ $patient->birthdate }}</td>
                                            <td>{{ $patient->sex }}</td>
                                            <td>{{ $patient->phone }}</td>
                                            <td style="white-space: nowrap"><a class="btn btn-primary"
                                                    href="{{ '/medical_record/' . $patient->id . '/add' }}">
                                                    Tambah Rekam Medis
                                                </a>
                                                
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
