@extends('siswa.layouts.main')

@section('konten')
<div class="mb-4">
    <a href='/siswa' class="btn btn-secondary mb-3">
        << Kembali</a>
            <h2>{{ $data->nama_kegiatan }}</h2>
            <p>
                <b>Nrp</b> {{ $data->nrp}}
            </p>
            <p>
                <b>Semester</b> {{ $data->semester}}
            </p>
            <p>
                <b>Waktu</b> {{ $data->waktu}}
            </p>
            <p>
                <b>Tempat</b> {{ $data->tempat}}
            </p>
            <p>
                <b>Instansi</b> {{ $data->instansi}}
            </p>
            <p>
                <b>Posisi</b> {{ $data->posisi}}
            </p>
            <p>
                <b>Golongan Kegiatan</b> {{ $data->golongan}}
            </p>
            <p>
                <b>Jenis Kegiatan</b> {{ $data->jenis}}
            </p>
            <p>
                <b>Penyelenggara Kegiatan</b> {{ $data->penyelenggara}}
            </p>
            <p>
                <b>Status Kegiatan</b> {{ $data->status}}
            </p>

            <p><b>Photo Sertifikat</b> </p>
            @if ($data->foto)
            <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'.$data->foto }}" />
            @endif

</div>
@endsection