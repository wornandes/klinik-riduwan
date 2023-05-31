
    <div class="page-heading">
        <h3>Detail Rekam Medis</h3>
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
                                        <div class="col-12 col-md-6 text-black">{{ $medical_record->patient->name }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Tanggal Lahir
                                        </div>
                                        <div class="col-12 col-md-6 text-black">{{ \Carbon\Carbon::parse($medical_record->patient->birthdate)->translatedFormat('l, d F Y') }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Jenis
                                            Kelamin</div>
                                        <div class="col-12 col-md-6 text-black">
                                            @if ($medical_record->patient->sex == 'Laki-laki')
                                                Laki - laki
                                            @else
                                                Perempuan
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Alamat</div>
                                        <div class="col-12 col-md-6 text-black">
                                            {{ $medical_record->patient->address }}
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Alergi
                                        </div>
                                        <div class="col-12 col-md-6 text-black">
                                            {{ $medical_record->patient->allergy }}
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Nomor
                                            Telepon</div>
                                        <div class="col-12 col-md-6 text-black">{{ $medical_record->patient->phone }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Tanggal Dibuat</div>
                                        <div class="col-12 col-md-6 text-black">{{ \Carbon\Carbon::parse($medical_record->date)->translatedFormat('l, d F Y') }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Anamnesa</div>
                                        <div class="col-12 col-md-6 text-black">{{ $medical_record->anamnesis }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Diagnosa</div>
                                        <div class="col-12 col-md-6 text-black">{{ $medical_record->diagnosis }}</div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-12 col-md-4 col-lg-4 col-xl-3 text-muted font-semibold">Terapi</div>
                                        <div class="col-12 col-md-6 text-black">{{ $medical_record->therapy }}</div>
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