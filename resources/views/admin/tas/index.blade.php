@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">tas
                        <button type="button" class="btn btn-sm btn-outline-primary" style="float:right" data-bs-toggle="modal"
                            data-bs-target="#addtas">
                            Tambah Data
                        </button>
                        @include('admin.tas.create')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Merek</th>
                                    <th>Foto</th>
                                    <th>Warna</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Link</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($Tas as $tas)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $tas->merek -> nama }}</td>
                                            <td>
                                                <img src="{{ asset('images/tas/' . $tas->foto) }}" alt="" width='100'>
                                            </td>
                                            <td>{{ $tas->warna }}</td>
                                            <td>{{ $tas->deskripsi}}</td>
                                            <td>{{ $tas->harga}}</td>
                                            <td>{{ $tas->link}}</td>
                                            <td>
                                                <form action="{{ route('tas.destroy', $tas->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-sm btn-outline-warning"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#edittas-{{ $tas->id }}">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-info"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#showtas-{{ $tas->id }}">
                                                        Show
                                                    </button>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('apakah anda yakin?')"> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        @include('admin.tas.edit')
                                        @include('admin.tas.show')
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection