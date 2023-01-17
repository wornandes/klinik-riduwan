@extends('layouts.index')
@section('content')
<div class="page-heading">
    <h3>Tambah Pasien</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <form class="form form-horizontal" action="/patient/store" method="post">
                            @csrf
                            <div class="form-body">
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 col-form-label">Nama Lengkap</label>
                                    <div class="col-md-8 col-lg-10">
                                        <input class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            name="name" type="text" value="{{ old('name') }}">
                                        @error('name')
                                            <span class="validation-error"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 col-form-label">Tanggal Lahir</label>
                                    <div class="col-md-8 col-lg-10">
                                        <input
                                            class="form-control form-control-lg @error('birthdate') is-invalid @enderror"
                                            name="birthdate" type="date" value="{{ old('birthdate') }}">
                                        @error('birthdate')
                                            <span class="validation-error"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-md-8 col-lg-10">
                                        <select class="form-control form-control-lg  @error('sex') is-invalid @enderror" name="sex">
                                            <option value="">Pilih Jenis Kelamin</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                        @error('sex')
                                            <span class="validation-error"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 col-form-label">Alamat</label>
                                    <div class="col-md-8 col-lg-10">
                                        <input
                                            class="form-control form-control-lg @error('address') is-invalid @enderror"
                                            name="address" type="text" value="{{ old('address') }}">
                                        @error('address')
                                            <span class="invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 col-form-label">Alergi</label>
                                    <div class="col-md-8 col-lg-10">
                                        <input
                                            class="form-control form-control-lg @error('allergy') is-invalid @enderror"
                                            name="allergy" type="text" value="{{ old('allergy') }}">
                                        @error('allergy')
                                            <span class="invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-md-4 col-lg-2 col-form-label">Nomor Telepon</label>
                                    <div class="col-md-8 col-lg-10">
                                        <input
                                            class="form-control form-control-lg @error('phone') is-invalid @enderror"
                                            name="phone" type="text" value="{{ old('phone') }}">
                                        @error('phone')
                                            <span class="invalid-feedback"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                               
                                <div class="row mb-3">
                                    <div class="col offset-md-4 offset-lg-2">
                                        <div>
                                            <button class="btn btn-primary me-1 mb-1" type="submit">Tambah</button>
                                            <a class="btn btn-light-secondary me-1 mb-1" href="/patient">Batal</a>
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