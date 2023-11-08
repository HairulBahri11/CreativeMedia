@extends('index')
@section('title', 'Detail Formulir')
@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="dashboard-content px-3 pt-5">
        <div class="container">
            <div class="row mb-2">
                <div class="container">
                    <div class="col-md-5">
                        <h4 style="font-weight: bold">Detail Formulir</h4>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="box-content bg-light p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th>Foto</th>
                                        <td><img src="{{ asset('storage/images/' . $data->foto) }}" class="img-fluid"
                                                style="height: 300px;" alt="gambar"></td>
                                    </tr>
                                    <tr>
                                        <th>Nama</th>
                                        <td>{{ $data->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tempat Lahir</th>
                                        <td>{{ $data->tempat_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Tanggal Lahir</th>
                                        <td>{{ $data->tanggal_lahir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jenis Kelamin</th>
                                        <td>{{ $data->jenis_kelamin }}</td>
                                    </tr>
                                    <tr>
                                        <th>Agama</th>
                                        <td>{{ $data->agama }}</td>
                                    </tr>
                                    <tr>
                                        <th>Suku</th>
                                        <td>{{ $data->suku }}</td>
                                    </tr>
                                    <tr>
                                        <th>Kebangsaan</th>
                                        <td>{{ $data->kebangsaan }}</td>
                                    </tr>
                                    <tr>
                                        <th>Pendidikan Terakhir</th>
                                        <td>{{ $data->pendidikan_terakhir }}</td>
                                    </tr>
                                    <tr>
                                        <th>Jurusan</th>
                                        <td>{{ $data->jurusan }}</td>
                                    </tr>
                                    <tr>
                                        <th>IPK</th>
                                        <td>{{ $data->ipk }}</td>
                                    </tr>
                                    <tr>
                                        <th>PT</th>
                                        <td>{{ $data->pt }}</td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td>{{ $data->alamat }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
