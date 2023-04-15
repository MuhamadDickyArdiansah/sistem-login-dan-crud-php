@extends('siswa.layouts.main')

@section('konten')
<form method="post" action="/siswa" enctype="multipart/form-data">
    @csrf
    <!-- <div class="mb-3">
        <label for="nomor_induk" class="form-label">Nomor Induk</label>
        <input type="text" class="form-control" name='no' id="no" value="{{ Session::get('no')}}">
    </div> -->
    <div class="mb-3">
        <label for="nrp" class="form-label">NRP</label>
        <input type="text" class="form-control" name='nrp' id="nrp" value="{{ Session::get('nrp')}}">
    </div>
    <div class="mb-3">
        <label for="nama" class="form-label">Nama</label>
        <p class="form-control border-0" disabled><b>{{ auth()->user()->name }}</b></p>
    </div>
    <div class="mb-3">
        <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
        <input type="text" class="form-control" name="nama_kegiatan" id="nama_kegiatan">{{ Session::get('alamat')}}</input>
    </div>
    <div class="mb-3">
        <label for="semester" class="form-label">Semester</label>
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
        <input type="text" class="form-control" name="waktu">{{ Session::get('alamat')}}</input>
    </div>
    <div class="mb-3">
        <label for="tempat" class="form-label">Tempat Pelaksanaan</label>
        <input type="text" class="form-control" name="tempat" id="tempat">{{ Session::get('alamat')}}</input>
    </div>
    <div class="mb-3">
        <label for="instansi" class="form-label">Instansi</label>
        <input type="text" class="form-control" name="instansi">{{ Session::get('instansi')}}</input>
    </div>
    <div class="mb-3">
        <label for="posisi" class="form-label">Posisi</label>
        <input type="text" class="form-control" name="posisi" id="posisi">{{ Session::get('alamat')}}</input>
    </div>
    <div class="mb-3">
        <label for="golongan" class="form-label">Golongan Kegiatan</label>
        <select class="form-select form-select-sm" name="golongan" id="golongan">
            <option selected="" disabled="">Silahkan masukan golongan</option>
            <option>Partisipatif - Ekstrakurikuler</option>
            <option>Partisipatif -Kokurikuler</option>
            <option>Pelatihan Dasar</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="jenis" class="form-label">Jenis Kegiatan</label>
        <select class="form-select form-select-sm" name="jenis" id="jenis">
            <option value="#" selected="" disabled="">Silahkan pilih jenis</option>
            <option id="Publikasi">Publikasi</option>
            <option id="Workshop / Training / Seminar">Workshop / Training / Seminar</option>
            <option id="Organisasi / Kepanitiaan">Organisasi / Kepanitiaan</option>
            <option id="Perlombaan">Perlombaan</option>
            <option id="Magang">Magang</option>
            <option id="Kewirausahaan">Kewirausahaan</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="penyelenggara" class="form-label">Penyelenggara</label>
        <select class="form-select form-select-sm" name="penyelenggara" id="penyelenggara">
            <option selected="" disabled="">Silahkan pilih penyelenggara kegiatan</option>
            <option>Pemerintah/Profesional</option>
            <option>Masyarakat Umum</option>
            <option>Mahasiswa</option>
            <option>-</option>
            <option>Institut/Fakultas/Program Studi</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status Organisasi/Kepanitiaan</label>
        <select class="form-select form-select-sm" name="status" id="status">
            <option selected="" disabled="">Silahkan pilih status</option>
            <option selected="">-</option>
            <option>Anggota Organisasi Selain HMJ</option>
            <option>Anggota Panitia Selain HMJ</option>
            <option>Pengurus / Panitia Non Inti / Koordinator</option>
            <option>Pengurus Inti (Wakil, Bendahara, Sekretaris)</option>
            <option>Ketua Organisasi</option>
            <option>Ketua Panitia</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" name="foto" id="foto">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">SIMPAN</button>
    </div>
</form>
@endsection