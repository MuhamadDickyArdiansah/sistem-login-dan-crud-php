@extends('siswa.layouts.main')

@section('konten')
<a href='/siswa' class="btn btn-secondary">
    << Kembali</a>
        <form method="post" action="{{ '/siswa/'.$data->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <h1>Nama Kegiatan: {{ $data->nama_kegiatan }}</h1>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">NRP</label>
                <input type="text" class="form-control" name='nrp' id="nrp" value="{{ $data->nrp }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name='nama' id="nama" value="{{ auth()->user()->name }}" disabled>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Nama Kegiatan</label>
                <input type="text" class="form-control" name="alamat" value="{{ $data->nama_kegiatan }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Semester</label>
                <select class="form-select form-select-sm-2" name="semester" id="semester">
                    <option value="#" selected="" disabled="" name="semester" id="semester">Silahkan pilih semester</option>
                    <option> 1 </option>
                    <option> 2 </option>
                    <option> 3 </option>
                    <option> 4 </option>
                    <option> 5 </option>
                    <option> 6 </option>
                    <option> 7 </option>
                    <option> 8 </option>

                </select>
            </div>
            <div class="mb-3">
                <label for="waktu" class="form-label">Waktu Pelaksanaan</label>
                <input type="text" class="form-control" name="waktu" value="{{ $data->waktu }}">
            </div>
            <div class="mb-3">
                <label for="tempat" class="form-label">Tempat Pelaksanaan</label>
                <input type="text" class="form-control" name="tempat" value="{{ $data->tempat }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Posisi</label>
                <input type="text" class="form-control" name="alamat" value="{{ $data->posisi }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Golongan Kegiatan</label>
                <select class="form-select form-select-sm" name="golongan" id="golongan">
                    <option value="#" selected="" disabled="">Silahkan masukan golongan</option>
                    <option value="2">Partisipatif - Ekstrakurikuler</option>
                    <option value="1">Partisipatif -Kokurikuler</option>
                    <option value="6">Pelatihan Dasar</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jenis" class="form-label">Jenis Kegiatan</label>
                <select class="form-select form-select-sm" name="jenis" id="jenis">
                    <option value="#" selected="" disabled="">Silahkan pilih jenis</option>
                    <option id="Publikasi" value="6">Publikasi</option>
                    <option id="Workshop / Training / Seminar" value="9">Workshop / Training / Seminar</option>
                    <option id="Organisasi / Kepanitiaan" value="15">Organisasi / Kepanitiaan</option>
                    <option id="Perlombaan" value="22">Perlombaan</option>
                    <option id="Magang" value="25">Magang</option>
                    <option id="Kewirausahaan" value="35">Kewirausahaan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Penyelenggara</label>
                <select class="form-select form-select-sm" name="penyelenggara" id="penyelenggara">
                    <option value="#" selected="" disabled="">Silahkan pilih penyelenggara kegiatan</option>
                    <option value="4">Pemerintah/Profesional</option>
                    <option value="3">Masyarakat Umum</option>
                    <option value="2">Mahasiswa</option>
                    <option value="1">-</option>
                    <option value="8">Institut/Fakultas/Program Studi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Status Organisasi/Kepanitiaan</label>
                <select class="form-select form-select-sm" name="status_2" id="statuso">
                    <option value="#" selected="" disabled="">Silahkan pilih status</option>
                    <option value="0" selected="">-</option>
                    <option value="10">Anggota Organisasi Selain HMJ</option>
                    <option value="11">Anggota Panitia Selain HMJ</option>
                    <option value="12">Pengurus / Panitia Non Inti / Koordinator</option>
                    <option value="13">Pengurus Inti (Wakil, Bendahara, Sekretaris)</option>
                    <option value="14">Ketua Organisasi</option>
                    <option value="15">Ketua Panitia</option>
                </select>
            </div>
            @if ($data->foto)
            <div class="mb-3">
                <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'.$data->foto }}" />
            </div>
            @endif
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>



            <!-- <div class="mb-3">
                <h1>Nomor Induk: {{ $data->nomor_induk }}</h1>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" name='nama' id="nama" value="{{ $data->nama }}">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat">{{ $data->alamat }}</textarea>
            </div>
            @if ($data->foto)
            <div class="mb-3">
                <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'.$data->foto }}" />
            </div>
            @endif
            <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto">
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">UPDATE</button>
            </div> -->
        </form>
        @endsection