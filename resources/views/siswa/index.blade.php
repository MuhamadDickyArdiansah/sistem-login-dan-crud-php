@extends('siswa/layouts/main')

@section('konten')
<div class="container mt-5">
    <a href="/siswa/create" class="btn btn-primary mb-5">+Tambah Kegiatan</a>
    <table class="table table-bordered table-hover" id="myTable">
        <thead>
            <tr>

                <th>No</th>
                <th>Nama Kegiatan</th>
                <th>Jenis Kegiatan</th>
                <th>Waktu</th>
                <th>Tempat</th>
                <th>Instansi</th>
                <th>Posisi</th>
                <th>Poin</th>
                <th>Status</th>
                <th>Keterangan</th>
                <!-- <th>Bukti SKK</th>
                <th>Photo Kegiatan</th> -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $item)
            <tr>


                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_kegiatan }}</td>
                <td>{{ $item->jenis }}</td>
                <td>{{ $item->waktu }}</td>
                <td>{{ $item->tempat }}</td>
                <td>{{ $item->instansi }}</td>
                <td>{{ $item->posisi }}</td>
                <td>0</td>
                <td>menunggu konfirmasi</td>
                <td> </td>
                <!-- <td>
                    @if ($item->foto)
                    <img style="max-width:50px;max-height:50px" src="{{ url('foto').'/'.$item->foto }}" />
                    @endif
                </td> -->
                <td>
                    <a class='btn btn-secondary btn-sm' href='{{ url('/siswa/'.$item->id) }}'>Detail</a>
                    <a class='btn btn-warning btn-sm' href='{{ url('/siswa/'.$item->id.'/edit') }}'>Edit</a>
                    <form onsubmit="return confirm('Yakin mau hapus data?')" class='d-inline' action="{{ '/siswa/'.$item->id }}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" type="submit">Del</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>

@endsection