@extends('layouts.index')
@section('content')
<div class="page-heading">
    <h4>Daftar User</h4>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <div class="mb-3">
                            <a class="btn btn-primary" href="{{ url('/user/add') }}">Tambah User
                                </a>
                        </div>
                         @if(session()->has('success'))
    <div class="alert alert-success  col-lg-8" role="alert">
      {{ session('success') }}
    </div>  
    @endif
                        <div class="table-responsive">
                            <table class="table" id="users-table" width="100%">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Username</th>
                                    <th>Role</th>
                                    <th style="white-space: nowrap">Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($users as $key => $user)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->role->name }}</td>
                                            <td style="white-space: nowrap"><a class="btn btn-secondary"
                                                    href="{{ '/user/' . $user->id . '/edit' }}">
                                                    Edit
                                                </a>
                                                @if ($user->id != auth()->id())
                                                <form action="/user/{{ $user->id }}" method="get" class="d-inline">
                                                    @method('delete')   
                                                    @csrf
                                                    <button class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus pengguna ini?')">Delete</button>
                                                </form>
                                                @endif
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
