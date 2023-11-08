@extends('index')
@section('title', 'Edit Formulir')
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
                        <h4 style="font-weight: bold">Edit Formulir</h4>
                    </div>
                    <div class="col-md-5 ms-auto">
                        <form action="{{ route('formulir.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="float-end">
                                <button type="submit" class="btn btn-sm btn-primary text-white hover-btn"><i
                                        class="fa-solid fa-circle-plus text-white"></i>Simpan</button>
                            </div>
                    </div>
                </div>
            </div>
            <div class="container">

                <div class="box-content bg-light p-3">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                <input type="text" class="form-control" name="nama" id="exampleFormControlInput1"
                                    placeholder="Masukan Nama" value="{{ $data->nama }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tempat Lahir</label>
                                <input type="text" class="form-control" name="tempat_lahir" id="exampleFormControlInput1"
                                    placeholder="Masukan Tempat Lahir" value="{{ $data->tempat_lahir }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                                <input type="date" class="form-control" name="tanggal_lahir"
                                    id="exampleFormControlInput1" placeholder="Masukan Tanggal Lahir"
                                    value="{{ $data->tanggal_lahir }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                    <option selected value="{{ $data->jenis_kelamin }}">{{ $data->jenis_kelamin }}</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Agama</label>
                                <select class="form-select" name="agama" aria-label="Default select example">
                                    <option selected value="{{ $data->agama }}">{{ $data->agama }}</option>
                                    <option value="islam">islam</option>
                                    <option value="kristen">kristen</option>
                                    <option value="hindu">hindu</option>
                                    <option value="budha">budha</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Suku</label>
                                <input type="text" class="form-control" name="suku" id="exampleFormControlInput1"
                                    value="{{ $data->suku }}">

                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Kebangsaan</label>
                                <input type="text" class="form-control" name="kebangsaan" id="exampleFormControlInput1"
                                    value="{{ $data->kebangsaan }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Pendidikan Terakhir</label>
                                <input type="text" class="form-control" name="pendidikan_terakhir"
                                    id="exampleFormControlInput1" placeholder="Masukan Pendidikan Terakhir"
                                    value="{{ $data->pendidikan_terakhir }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Jurusan</label>
                                <input type="text" class="form-control" name="jurusan" id="exampleFormControlInput1"
                                    value="{{ $data->jurusan }}">
                            </div>
                            <div class="mb-3">
                                {{-- IPK --}}
                                <label for="exampleFormControlInput1" class="form-label">Ipk</label>
                                <input type="text" class="form-control" name="ipk" id="exampleFormControlInput1"
                                    value="{{ $data->ipk }}">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">PT</label>
                                <input type="text" class="form-control" name="pt" id="exampleFormControlInput1"
                                    value="{{ $data->pt }}">
                            </div>
                            <div class="mb-3">
                                {{-- foto --}}
                                <label for="exampleFormControlInput1" class="form-label">Foto</label>
                                <input type="file" class="form-control" name="foto" id="exampleFormControlInput1"
                                    placeholder="Masukan Foto">
                                <p class="text-danger text-sm">pilih jika ingin mengubah</p>
                                <img src="{{ asset('storage/images/' . $data->foto) }}" width="100" height="100"
                                    alt="">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control" cols="20" rows="5">{{ $data->alamat }}</textarea>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
