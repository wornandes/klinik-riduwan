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
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $registration->patient->name }}</td>
                                            <td>{{ $registration->check_date }}</td>
                                            <td>{{ $registration->registration_date }}</td>
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
