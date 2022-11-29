@extends('layouts.admin')
@section('content')
<div class="main-content container-fluid">
                <div class="page-title">
                    <h3>Dashboard</h3><p></p>
                    <p>Selamat Datang Di Dashboard<span class='text-danger'><i data-feather="heart"></i></span><a
                                href="#">Ahdan Khoerul Aziz </a></p><p></p>
                     </div>
                <section class="section">
                    <div class="row mb-2">
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>Merek</h3>
                                            <div class="card-right d-flex align-items-center">
                                               
                                            </div>
                                        </div>
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class="text-white">{{ $jumlahMerek }} Data</h3>
                                        </div>
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                        <!-- <h6 class="font-extrabold mb-0">{{ $jumlahMerek }} Data</h6> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>Tas</h3>
                                            <div class="card-right d-flex align-items-center">
                                               
                                            </div>
                                        </div>
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class="text-white">{{ $jumlahTas }} Data</h3>
                                        </div>
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                        <!-- <h6 class="font-extrabold mb-0">{{ $jumlahMerek }} Data</h6> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>Pengguna</h3>
                                            <div class="card-right d-flex align-items-center">
                                                <!-- <p>1,544 </p> -->
                                            </div>
                                        </div>
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class="text-white">{{ $jumlahUser }} Data</h3>
                                        </div>
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                        <!-- <h6 class="font-extrabold mb-0">{{ $jumlahMerek }} Data</h6> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-3">
                            <div class="card card-statistic">
                                <div class="card-body p-0">
                                    <div class="d-flex flex-column">
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                            <h3 class='card-title'>pemesan</h3>
                                            <div class="card-right d-flex align-items-center">
                                            
                                            </div>
                                        </div>
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                        <h3 class="text-white">{{ $jumlahPemesan }} Data</h3>
                                        </div>
                                        <div class='px-3 py-3 d-flex justify-content-between'>
                                        <!-- <h6 class="font-extrabold mb-0">{{ $jumlahMerek }} Data</h6> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class='card-heading p-1 pl-3'>TAS</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                        <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Merek</th>
                                    <th>Foto</th>
                                    <th>Warna</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
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
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- //table pengguna -->
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h4 class="card-title">PEMESAN</h4>
                                   
                                </div>
                                <div class="card-body px-0 pb-0">
                                    <div class="table-responsive">
                                        <table class='table mb-0' id="table1">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>No.Hp</th>
                                                    <th>Alamat</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($pemesans as $pemesan)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $user->nama}}</td>
                                            <td>{{ $user->alamat }}</td>
                                            <td>{{ $user->no_hp }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card ">
                                <div class="card-header">
                                    <h4>MEREK</h4>
                                </div>
                                <div class="card-body">
                                    <div id="radialBars"></div>
                                    <div class="text-center mb-5">
                                    <table class="table">
                                <thead>
                                    <th>No</th>
                                    <th>Nama Merek</th>
                                </thead>
                                <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($mereks as $merek)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $merek->nama }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                                    </div>
                                </div>
                            </div>

                            <div class="card widget-todo">
                                <div
                                    class="card-header border-bottom d-flex justify-content-between align-items-center">
                                    <h4 class="card-title d-flex">
                                        PENGGUNA
                                    </h4>
                                    <table>
                                        
                                    </table>
                                </div>
                                <div class="card-body px-0 py-1">
                                    <table class='table table-borderless'>
                                    <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                    @php $no =1; @endphp
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
@endsection