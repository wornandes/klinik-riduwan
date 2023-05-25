@extends('layouts.index')
@section('content')
<div class="page-heading">
    <h3>Tambah Rekam Medis</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="/medical_record/store" method="post">
                            @csrf
                            <input name="id" type="hidden" value="{{ $patient->id }}">
                            <div class="form-body">
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 col-form-label">Tanggal </label>
                                    <div class="col-md-8 col-lg-10">
                                        <input
                                            class="form-control form-control-lg @error('date') is-invalid @enderror"
                                            name="date" type="date" value="{{ old('date') }}">
                                        @error('date')
                                            <span class="validation-error"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 col-form-label">Anamnesa</label>
                                    <div class="col-md-8 col-lg-10">
                                        <input
                                            class="form-control form-control-lg @error('anamnesis') is-invalid @enderror"
                                            name="anamnesis" type="text" value="{{ old('anamnesis') }}">
                                        @error('anamnesis')
                                            <span class="invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 col-form-label">Diagnosa</label>
                                    <div class="col-md-8 col-lg-10">
                                        <input
                                            class="form-control form-control-lg @error('diagnosis') is-invalid @enderror"
                                            name="diagnosis" type="text" value="{{ old('diagnosis') }}">
                                        @error('diagnosis')
                                            <span class="invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 col-form-label">Terapi</label>
                                    <div class="col-md-8 col-lg-10">
                                        <input
                                            class="form-control form-control-lg @error('therapy') is-invalid @enderror"
                                            name="therapy" type="text" value="{{ old('therapy') }}">
                                        @error('therapy')
                                            <span class="invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="row mb-3">
                                    <div class="col offset-md-4 offset-lg-2">
                                        <div>
                                            <button class="btn btn-primary me-1 mb-1" type="submit">Tambah</button>
                                            <a class="btn btn-danger me-1 mb-1" href="/medical_record">Batal</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
</div>
@endsection