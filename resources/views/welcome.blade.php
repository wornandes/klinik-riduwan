@extends('layouts.index')

@section('content')
    <div class="page-heading">
        <h3>Selamat Datang di Dashboard!</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col mb-3">

                Halo, {{ Auth::user()->name }}
            </div>
            <hr>
        </section>
        <section>
            <h3 class="mb-4">
                Menu
            </h3>
        </section>
        <section class="row">
            @if (Auth::user()->role_id == 1)
                <div class="col-12 col-lg-3 col-md-6">
                    <a class="btn btn-primary btn-block btn-lg shadow-lg rounded-3 mb-4" href="{{ url('user') }}">
                        <div class="d-flex px-4 py-3 align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <svg class="text-white" style="height: 1.5rem; width: 1.5rem;"
                                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path d="M6 12v-2h3v2H6z" />
                                    <path
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z" />
                                </svg>
                                <div class="ms-3 me-auto">
                                    <h4 class="text-white mb-0 me-auto">Daftar User</h4>
                                </div>
                            </div>
                            <svg class="bi bi-arrow-right-circle" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </div>
                    </a>
                </div>
            @endif
            @if (Auth::user()->role_id == 2)
                <div class="col-12 col-lg-3 col-md-6">
                    <a class="btn btn-primary btn-block btn-lg shadow-lg rounded-3 mb-4" href="{{ url('patient') }}">
                        <div class="d-flex px-4 py-3 align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <svg class="text-white" style="height: 1.5rem; width: 1.5rem;"
                                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path d="M6 12v-2h3v2H6z" />
                                    <path
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z" />
                                </svg>
                                <div class="ms-3 me-auto">
                                    <h4 class="text-white mb-0 me-auto">Daftar Pasien</h4>
                                </div>
                            </div>
                            <svg class="bi bi-arrow-right-circle" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <a class="btn btn-primary btn-block btn-lg shadow-lg rounded-3 mb-4" href="{{ url('registration') }}">
                        <div class="d-flex px-4 py-3 align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <svg class="text-white" style="height: 1.5rem; width: 1.5rem;"
                                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path d="M6 12v-2h3v2H6z" />
                                    <path
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z" />
                                </svg>
                                <div class="ms-3 me-auto">
                                    <h4 class="text-white mb-0 me-auto">Daftar Antrian</h4>
                                </div>
                            </div>
                            <svg class="bi bi-arrow-right-circle" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </div>
                    </a>
                </div>
            @endif
            @if (Auth::user()->role_id == 3)
                <div class="col-12 col-lg-3 col-md-6">
                    <a class="btn btn-primary btn-block btn-lg shadow-lg rounded-3 mb-4" href="{{ url('medical_record') }}">
                        <div class="d-flex px-4 py-3 align-items-center justify-content-between">
                            <div class="d-flex align-items-center">
                                <svg class="text-white" style="height: 1.5rem; width: 1.5rem;"
                                    xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path d="M6 12v-2h3v2H6z" />
                                    <path
                                        d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM3 9h10v1h-3v2h3v1h-3v2H9v-2H6v2H5v-2H3v-1h2v-2H3V9z" />
                                </svg>
                                <div class="ms-3 me-auto">
                                    <h4 class="text-white mb-0 me-auto">Daftar Rekam Medis</h4>
                                </div>
                            </div>
                            <svg class="bi bi-arrow-right-circle" xmlns="http://www.w3.org/2000/svg" width="16"
                                height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z" />
                            </svg>
                        </div>
                    </a>
                </div>
            @endif

        </section>
    </div>
@endsection