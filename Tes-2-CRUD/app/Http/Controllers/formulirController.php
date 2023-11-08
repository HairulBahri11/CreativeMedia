<?php

namespace App\Http\Controllers;

use App\Models\Formulir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class formulirController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Formulir::orderBy('id', 'desc')->get();
        return view('data_formulir', compact('data'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create_formulir');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = Validator::make($request->all(), [
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'kebangsaan' => 'required',
            'pendidikan_terakhir' => 'required',
            'pt' => 'required',
            'jurusan' => 'required',
            'ipk' => 'required',
            'suku' => 'required',
            'alamat' => 'required',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $filename = '-';

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file = $file->storeAs('public/images', $filename);
        }


        $data = Formulir::create(
            [
                'nama' => $request->input('nama'),
                'tempat_lahir' => $request->input('tempat_lahir'),
                'tanggal_lahir' => $request->input('tanggal_lahir'),
                'jenis_kelamin' => $request->input('jenis_kelamin'),
                'agama' => $request->input('agama'),
                'kebangsaan' => $request->input('kebangsaan'),
                'pendidikan_terakhir' => $request->input('pendidikan_terakhir'),
                'pt' => $request->input('pt'),
                'jurusan' => $request->input('jurusan'),
                'ipk' => $request->input('ipk'),
                'suku' => $request->input('suku'),
                'foto' => $filename,
                'alamat' => $request->input('alamat'),
            ]
        );
        if ($data) {
            return redirect()->route('formulir')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Data gagal ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Formulir::find($id);
        return view('edit_formulir', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = Validator::make($request->all(), [
            'nama' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'kebangsaan' => 'required',
            'pendidikan_terakhir' => 'required',
            'pt' => 'required',
            'jurusan' => 'required',
            'ipk' => 'required',
            'suku' => 'required',
            'alamat' => 'required',
        ]);

        if ($validasi->fails()) {
            return redirect()->back()->withErrors($validasi)->withInput();
        }

        $data = Formulir::find($id);
        $filename = $data->foto;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $extension = $file->getClientOriginalName();
            $filename = time() . '.' . $extension;
            $file = $file->storeAs('public/images', $filename);
        }

        $data->update([
            'nama' => $request->input('nama'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'agama' => $request->input('agama'),
            'kebangsaan' => $request->input('kebangsaan'),
            'pendidikan_terakhir' => $request->input('pendidikan_terakhir'),
            'pt' => $request->input('pt'),
            'jurusan' => $request->input('jurusan'),
            'ipk' => $request->input('ipk'),
            'suku' => $request->input('suku'),
            'foto' => $filename,
            'alamat' => $request->input('alamat'),
        ]);

        if ($data) {
            return redirect()->route('formulir')->with('success', 'Data berhasil diubah');
        } else {
            return redirect()->back()->with('error', 'Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Formulir::find($id);
        $path = 'public/images/';
        //destroy from storage
        Storage::delete($path . $data->foto);
        //destroy from storage to database
        $data->delete();

        if ($data) {
            return redirect()->route('formulir')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->back()->with('error', 'Data gagal dihapus');
        }
    }

    public function view(string $id)
    {
        $data = Formulir::find($id);
        return view('detail_formulir', compact('data'));
    }
}
