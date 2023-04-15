<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = siswa::orderBy('id', 'desc')->paginate(5);
        return view('siswa/index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Session::flash('nama', $request->nama);
        // Session::flash('alamat', $request->alamat);
        Session::flash('nrp', $request->nrp);
        Session::flash('nama_kegiatan', $request->nama_kegiatan);
        Session::flash('semester', $request->semester);
        Session::flash('jenis', $request->jenis);
        Session::flash('waktu', $request->waktu);
        Session::flash('tempat', $request->tempat);
        Session::flash('posisi', $request->posisi);
        Session::flash('golongan', $request->golongan);
        Session::flash('instansi', $request->instansi);
        Session::flash('penyelenggara', $request->penyelenggara);
        Session::flash('status', $request->status);



        $request->validate([

            'nrp' => 'required',
            'nama_kegiatan' => 'required',
            'semester' => 'required',
            'jenis' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'instansi' => 'required',
            'posisi' => 'required',
            'golongan' => 'required',
            'penyelenggara' => 'required',
            'status' => 'required',
            'foto' => 'required|mimes:jpeg,jpg,png,gif'
        ], [

            'nrp.required' => 'Nrp wajib diisi',
            'nama_kegiatan.required' => 'Nama wajib diisi',
            'semester.required' => 'Semester wajib diisi',
            'jenis.required' => 'Jenis Kegiatan wajib diisi',
            'waktu.required' => 'Waktu Kegiatan wajib diisi',
            'tempat.required' => 'Tempat Kegiatan wajib diisi',
            'instansi.required' => 'Instansi Kegiatan wajib diisi',
            'posisi.required' => 'Posisi Kegiatan wajib diisi',
            'golongan.required' => 'Golongan Kegiatan wajib diisi',
            'penyelenggara.required' => 'Penyelenggara Kegiatan wajib diisi',
            'status.required' => 'Status Kegiatan wajib diisi',
            'foto.required' => 'Silakan masukkan foto',
            'foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF'
        ]);

        $foto_file = $request->file('foto');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
        $foto_file->move(public_path('foto'), $foto_nama);


        $data = [

            'nrp' => $request->input('nrp'),
            'nama_kegiatan' => $request->input('nama_kegiatan'),
            'semester' => $request->input('semester'),
            'jenis' => $request->input('jenis'),
            'waktu' => $request->input('waktu'),
            'tempat' => $request->input('tempat'),
            'golongan' => $request->input('golongan'),
            'instansi' => $request->input('instansi'),
            'posisi' => $request->input('posisi'),
            'penyelenggara' => $request->input('penyelenggara'),
            'status' => $request->input('status'),
            'foto' => $foto_nama
        ];
        siswa::create($data);
        return redirect('siswa')->with('success', 'Berhasil memasukkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = siswa::where('id', $id)->first();
        return view('siswa/show')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = siswa::where('id', $id)->first();
        return view('siswa/edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nrp' => 'required',
            'nama_kegiatan' => 'required',
            'semester' => 'required',
            'jenis' => 'required',
            'waktu' => 'required',
            'tempat' => 'required',
            'instansi' => 'required',
            'posisi' => 'required',
            'golongan' => 'required',
            'penyelenggara' => 'required',
            'status' => 'required'
        ], [

            'nrp.required' => 'Nrp wajib diisi',
            'nama_kegiatan.required' => 'Nama wajib diisi',
            'semester.required' => 'Semester wajib diisi',
            'jenis.required' => 'Jenis Kegiatan wajib diisi',
            'waktu.required' => 'Waktu Kegiatan wajib diisi',
            'tempat.required' => 'Tempat Kegiatan wajib diisi',
            'instansi.required' => 'Instansi Kegiatan wajib diisi',
            'posisi.required' => 'Posisi Kegiatan wajib diisi',
            'golongan.required' => 'Golongan Kegiatan wajib diisi',
            'penyelenggara.required' => 'Penyelenggara Kegiatan wajib diisi',
            'status.required' => 'Status Kegiatan wajib diisi'
        ]);

        $data = [
            'nrp' => $request->input('nrp'),
            'nama_kegiatan' => $request->input('nrp_kegiatan'),
            'semester' => $request->input('semester'),
            'jenis' => $request->input('jenis'),
            'waktu' => $request->input('waktu'),
            'tempat' => $request->input('tempat'),
            'instansi' => $request->input('instansi'),
            'posisi' => $request->input('posisi'),
            'golongan' => $request->input('golongan'),
            'penyelenggara' => $request->input('penyelenggara'),
            'status' => $request->input('status'),

        ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto' => 'mimes:jpeg,jpg,png,gif'
            ], [
                'foto.mimes' => 'Foto hanya diperbolehkan berekstensi JPEG, JPG, PNG, dan GIF'
            ]);
            $foto_file = $request->file('foto');
            $foto_ekstensi = $foto_file->extension();
            $foto_nama = date('ymdhis') . "." . $foto_ekstensi;
            $foto_file->move(public_path('foto'), $foto_nama); //sudah terupload ke direktori

            $data_foto = siswa::where('id', $id)->first();
            File::delete(public_path('foto') . '/' . $data_foto->foto);

            // $data = [
            //     'foto' => $foto_nama
            // ];
            $data['foto'] = $foto_nama;
        }

        siswa::where('id', $id)->update($data);
        return redirect('/siswa')->with('success', 'Berhasil melakukan update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = siswa::where('id', $id)->first();
        File::delete(public_path('foto') . '/' . $data->foto);

        siswa::where('id', $id)->delete();
        return redirect('/siswa')->with('success', 'Berhasil hapus data');
    }
}
