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
                                            <td style="white-space: nowrap"><a class="btn btn-secondary"
                                                    href="{{ '/patient/' . $patient->id . '/detail' }}">
                                                    Detail
                                                </a>
                                                <a class="btn btn-secondary"
                                                    href="{{ '/patient/' . $patient->id . '/edit' }}">
                                                    Edit
                                                </a>
                                                <form action="/patient/delete" method="post" class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            
                            {{-- <form id="delete-form" action="{{ url('user/delete') }}" method="POST">
                                @csrf
                                <input name="id" type="hidden">
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
{{-- @push('script')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#users-table').DataTable({
                scrollX: true
            });
            $('.delete-user').click(function() {
                let user_id = $(this).data('id');
                Swal.fire({
                        title: `Apakah anda yakin menghapus data petugas ini?`,
                        text: "Jika anda menghapus, data tidak dapat dikembalikan",
                        icon: "warning",
                        buttons: true,
                        showCancelButton: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete.isConfirmed) {
                            let form = $("#delete-form");
                            $('input[name="id"]').val(user_id);
                            form.submit();
                        }
                    });
            })
        });
    </script>
@endpush --}}