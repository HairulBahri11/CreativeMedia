@extends('index')
@section('title', 'Data Formulir')
@section('content')
    @if (session('success'))
        <script>
            swal({
                title: "Good job!",
                text: "{{ session('success') }}!",
                icon: "success",
                button: "OK",
            });
        </script>
    @elseif (session('error'))
        <script>
            swal({
                title: "Opps!",
                text: "{{ session('error') }}!",
                icon: "error",
                button: "OK",
            });
        </script>
    @endif
    <div class="dashboard-content px-3 pt-5">
        <div class="container">
            <div class="row mb-2">
                <div class="container">
                    <div class="col-md-5">
                        <h4 style="font-weight: bold">Data Formulir</h4>
                    </div>
                    <div class="col-md-5 ms-auto">
                        <div class="float-end">
                            <a href="{{ route('formulir.create') }}" class="btn btn-sm btn-primary text-white hover-btn"><i
                                    class="fa-solid fa-circle-plus text-white"></i>Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="box-content bg-light">
                        <div class="col">
                            <div class="p-3">
                                <div class="table-responsive">
                                    <table class="table table-hover" id="MyTable">
                                        <thead class="bg-gray-100 p-1">
                                            <tr style="bg-color: black" class="mt-2">
                                                <th class="text-xs text-secondary opacity-7">Foto</th>
                                                <th class="text-xs text-secondary opacity-7">Nama</th>
                                                <th class="text-xs text-secondary opacity-7">Tempat/Tgl Lahir</th>
                                                <th class="text-xs text-secondary opacity-7">Jenis Kelamin</th>
                                                <th class="text-xs text-secondary opacity-7">Agama</th>
                                                <th class="text-xs text-secondary opacity-7">Pendidikan Terakhir</th>
                                                <th class="text-xs text-secondary opacity-7">action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $item)
                                                <tr>
                                                    <td align-middle>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <img src="{{ asset('storage/images/' . $item->foto) }}"
                                                                    width="100" height="100" alt="gambar">
                                                            </div>

                                                        </div>
                                                    </td>
                                                    <td class="text-xs text-secondary opacity-7 align-middle">
                                                        {{ $item->nama }}
                                                    </td>
                                                    <td class="text-xs text-secondary opacity-7 align-middle">
                                                        {{ $item->tempat_lahir }}/{{ $item->tanggal_lahir }}
                                                    </td>
                                                    <td class="text-xs text-secondary opacity-7 align-middle">
                                                        {{ $item->jenis_kelamin }}
                                                    </td>
                                                    <td class="text-xs text-secondary opacity-7 align-middle">
                                                        {{ $item->agama }}
                                                    </td>
                                                    <td class="text-xs text-secondary opacity-7 align-middle">
                                                        {{ $item->pendidikan_terakhir }}
                                                    </td>
                                                    <td class="text-xs text-secondary opacity-7 align-middle">

                                                        <a href="{{ route('formulir.view', $item->id) }}"
                                                            class="btn btn-sm btn-info" title="Lihat detail">
                                                            <i class="fa-solid fa-eye text-white fs-10"> </i></a>

                                                        <a href="{{ route('formulir.edit', $item->id) }}"
                                                            class="btn btn-sm btn-warning" title="Edit"><i
                                                                class="fa-solid fa-pen-to-square text-white"></i></a>
                                                        <form action="{{ route('formulir.delete', $item->id) }}"
                                                            method="POST" style="display: inline-block;">
                                                            @method('DELETE')
                                                            @csrf


                                                            <button type="submit" class="btn btn-sm btn-danger"
                                                                title="Hapus" data-id="{{ $item->id }}"
                                                                onclick="return confirm('apakah kamu yakin ingin menghapus data formulir?')"><i
                                                                    class="fa-solid fa-trash text-white fs-10"></i></button>
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

            </div>
        </div>

    </div>
@endsection
