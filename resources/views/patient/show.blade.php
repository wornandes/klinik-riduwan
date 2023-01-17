@extends('layouts.index')
@section('content')
    <div class="page-heading">
        <h3>Detail Pasien</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div>
                            <div class="row">
                                <div class="col-lg-8">

                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Nama</div>
                                        <div class="col-12 col-md-6 text-black">{{ $patient->name }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Nomor Rekam
                                            Medis
                                        </div>
                                        <div class="col-12 col-md-6 text-black">{{ $patient->birthdate }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">NIK</div>
                                        <div class="col-12 col-md-6 text-black">{{ $patient->address }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Tanggal
                                            Lahir</div>
                                        <div class="col-12 col-md-6 text-black">{{ $patient->birthday }}
                                            ({{ \Carbon\Carbon::parse($patient->birthday)->age }} tahun)
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Jenis
                                            Kelamin</div>
                                        <div class="col-12 col-md-6 text-black">
                                            @if ($patient->sex == 'L')
                                                Laki - laki
                                            @else
                                                Perempuan
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Alamat</div>
                                        <div class="col-12 col-md-6 text-black">
                                            {{ $patient->address }}
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Pekerjaan
                                        </div>
                                        <div class="col-12 col-md-6 text-black"></div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Nomor
                                            Telepon</div>
                                        <div class="col-12 col-md-6 text-black">{{ $patient->phone }}</div>
                                    </div>

                                    <div class="row justify-content-between mb-2">
                                        <h6 class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted">Action</h6>
                                        <div class="col-6">
                                            <a class="btn btn-block btn-secondary"
                                                href="{{ url('/patient/' . $patient->id . '/edit') }}">
                                                Edit Pasien
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <form id="delete-form" action="{{ url('patient/delete') }}" method="POST">
                                                @csrf
                                                <input name="id" type="hidden" value="{{ $patient->id }}">
                                            </form>
                                            <button class="btn btn-block btn-danger" id="delete-patient">
                                                Hapus Pasien
                                            </button>
                                        </div>

                                    </div>
                                </div>

                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </div>
@endsection