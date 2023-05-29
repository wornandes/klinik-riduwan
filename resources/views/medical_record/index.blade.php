@extends('layouts.index')
@section('content')
<div class="page-heading">
    <h3>Daftar Rekam Medis</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="mb-3">
                            <a class="btn btn-primary" href="{{ url('/medical_record/add1') }}">Tambah Rekam Medis
                                </a>
                        </div>
                         @if(session()->has('success'))
                        <div class="alert alert-success  col-lg-8" role="alert">
                        {{ session('success') }}
                        </div>  
                        @endif

                        <form action="/medical_record/search" method="GET">
                        <div class="input-group mb-3">
                        <input type="text" class="form-control" name="search" placeholder="Search .." value="{{ old('search') }}">
                        <button class="btn btn-danger" type="submit">Search</button>
                        </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table" id="medical_record-table" width="100%">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tanggal</th>
                                    <th>Anamnesa</th>
                                    <th>Diagnosa</th>
                                    <th>Terapi</th>
                                    <th style="white-space: nowrap">Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($medical_records as $key => $medical_record)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $medical_record->patient->name }}</td>
                                            <td>{{ $medical_record->date }}</td>
                                            <td>{{ $medical_record->anamnesis }}</td>
                                            <td>{{ $medical_record->diagnosis }}</td>
                                            <td>{{ $medical_record->therapy }}</td>
                                            <td style="white-space: nowrap"><a class="btn btn-info"
                                                    href="{{ '/medical_record/' . $medical_record->id . '/detail' }}">
                                                    Detail
                                                </a>
                                                <a class="btn btn-secondary"
                                                    href="{{ '/medical_record/' . $medical_record->id . '/edit' }}">
                                                    Edit
                                                </a>
                                                    <form action="/medical_record/{{$medical_record->id}}" method="get" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus rekam medis ini?')">Delete</button>
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
</div>
@endsection

