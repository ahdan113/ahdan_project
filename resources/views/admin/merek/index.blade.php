@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">Merek
                        <button type="button" class="btn btn-sm btn-outline-primary" style="float:right" data-bs-toggle="modal"
                            data-bs-target="#addmerek">
                            Tambah Data
                        </button>
                        @include('admin.merek.create')
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Aksi</th>
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($mereks as $merek)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $merek->nama }}</td>
                                            <td>
                                                <form action="{{ route('merek.destroy', $merek->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="button" class="btn btn-sm btn-outline-warning"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#editmerek-{{ $merek->id }}">
                                                        Edit
                                                    </button>
                                                    <button type="button" class="btn btn-sm btn-outline-info"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#showmerek-{{ $merek->id }}">
                                                        Show
                                                    </button>
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('apakah anda yakin?')"> Delete
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>

                                        @include('admin.merek.edit')
                                        @include('admin.merek.show')
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