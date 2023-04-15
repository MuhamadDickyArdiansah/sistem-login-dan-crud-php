@extends('layout/aplikasi')

@section('konten')
<div class="container mt-5 py-4">
  <h1 class="mb-5">Aturan Penilaian</h1>
  <div id="page-content" class="page-content footer-shadow" style="position: relative; z-index: 1; margin-bottom: 255px;">
    <div class="gridContainer content">
      <div id="post-48" class="post-48 page type-page status-publish hentry">
        <div>
          <p><a>Ketentuan Umum</a></p>
          <p><strong>Penilaian dilakukan dengan menggunakan sistem poin yang berdasarkan keaktifan mahasiswa dalam berbagai kegiatan, 1 skk setara dengan 50&nbsp; poin.</strong></p>
          <p><strong>Ketentuan Umum Penilaian</strong></p>
          <p><strong>Ketentuan umum penilaian terdiri atas :</strong></p>
          <ul>
            <li><strong>Poin yang dikumpulkan sekurang-kurangnya 1000 poin terdiri dari :</strong>
              <ol>
                <li><strong>Kegiatan Pelatihan Dasar 8 skk yang setara dengan 400 poin.</strong></li>
                <li><strong>Kegiatan Partisipatif sekurang-kurangnya 12 skk setara dengan 600 poin.</strong></li>
              </ol>
            </li>
          </ul>
          <ul>
            <li><strong>Indeks Pengali Poin adalah angka pengali yang digunakan untuk menghitung poin penilaian berdasarkan status setiap kegiatan yang dilaksanakan.</strong></li>
          </ul>
          <p><strong>Indeks pengali poin dibedakan atas :</strong></p>
          <p style="padding-left: 30px;"><strong>a) Indeks pengali poin untuk tingkat kegiatan;</strong></p>
          <p style="padding-left: 30px;"><strong>b) Indeks pengali poin untuk lama kegiatan;</strong></p>
          <p style="padding-left: 30px;"><strong>c) Indeks pengali poin untuk status penyelenggara;</strong></p>
          <p style="padding-left: 30px;"><strong>d) Indeks pengali poin untuk jenis kokurikuler atau ekstrakurikuler;</strong></p>
          <p style="padding-left: 30px;"><strong>e) Indeks pengali poin untuk status peserta pada setiap jenis kegiatan;</strong></p>
          <p><strong>Indeks Indeks Pengali Poin sesuai tingkat, lama kegiatan, dan status penyelenggara, dan jenis kokurikuler atau ekstrakurikuler seperti pada Tabel 1.</strong></p>
          <p style="text-align: center;"><strong>Tabel 1. Indeks Pengali</strong></p>
          <table class="table table-striped table-responsive" width="763">
            <tbody>
              <tr>
                <td colspan="3" width="763"><strong>A. Tingkat Kegiatan</strong></td>
              </tr>
              <tr>
                <td><strong>No</strong></td>
                <td><strong>Tingkat Kegiatan</strong></td>
                <td style="text-align: center;" width="220"><strong>Indeks Pengali Poin</strong></td>
              </tr>
              <tr>
                <td><strong>A.1</strong></td>
                <td><strong>Jurusan/Itenas/Kecamatan/RT/RW/Desa</strong></td>
                <td style="text-align: center;" width="220"><strong>1.0</strong></td>
              </tr>
              <tr>
                <td><strong>A.2</strong></td>
                <td><strong>Provinsi/Kota/Kabupaten</strong></td>
                <td style="text-align: center;" width="220"><strong>1.5</strong></td>
              </tr>
              <tr>
                <td><strong>A.3</strong></td>
                <td><strong>Nasional</strong></td>
                <td style="text-align: center;" width="220"><strong>2.0</strong></td>
              </tr>
              <tr>
                <td><strong>A.4</strong></td>
                <td><strong>Internasional</strong></td>
                <td style="text-align: center;" width="220"><strong>3.0</strong></td>
              </tr>
              <tr>
                <td colspan="3"><strong>B. Lama Kegiatan</strong></td>
              </tr>
              <tr>
                <td><strong>No</strong></td>
                <td><strong>Lama Kegiatan</strong></td>
                <td style="text-align: center;" width="220"><strong>Indeks Pengali Poin</strong></td>
              </tr>
              <tr>
                <td><strong>B.1</strong></td>
                <td><strong>4 – 16 Jam</strong></td>
                <td style="text-align: center;" width="220"><strong>1.0</strong></td>
              </tr>
              <tr>
                <td><strong>B.2</strong></td>
                <td><strong>17 – 32 Jam</strong></td>
                <td style="text-align: center;" width="220"><strong>1.5</strong></td>
              </tr>
              <tr>
                <td><strong>B.3</strong></td>
                <td><strong>33 – 48 Jam</strong></td>
                <td style="text-align: center;" width="220"><strong>2.0</strong></td>
              </tr>
              <tr>
                <td><strong>B.4</strong></td>
                <td><strong>48 – 64 Jam</strong></td>
                <td style="text-align: center;" width="220"><strong>2.5</strong></td>
              </tr>
              <tr>
                <td><strong>B.5</strong></td>
                <td><strong>Lebih dari 64 Jam</strong></td>
                <td style="text-align: center;" width="220"><strong>3.0</strong></td>
              </tr>
              <tr>
                <td colspan="3"><strong>C. Status Penyelenggara</strong></td>
              </tr>
              <tr>
                <td><strong>No</strong></td>
                <td><strong>Penyelenggara</strong></td>
                <td style="text-align: center;" width="220"><strong>Indeks Pengali Poin</strong></td>
              </tr>
              <tr>
                <td><strong>C.1</strong></td>
                <td><strong>Masyarakat Umum</strong></td>
                <td style="text-align: center;" width="220"><strong>2.0</strong></td>
              </tr>
              <tr>
                <td><strong>C.2</strong></td>
                <td><strong>Institut/Pemerintah/Profesional</strong></td>
                <td style="text-align: center;" width="220"><strong>3.0</strong></td>
              </tr>
              <tr>
                <td><strong>C.3</strong></td>
                <td><strong>Mahasiswa</strong></td>
                <td style="text-align: center;" width="220"><strong>1.0</strong></td>
              </tr>
              <tr>
                <td colspan="3"><strong>D. Kokurikuler/Ekstrakurikuler</strong></td>
              </tr>
              <tr>
                <td><strong>No</strong></td>
                <td><strong>Jenis Kegiatan</strong></td>
                <td style="text-align: center;" width="220"><strong>Indeks Pengali Poin</strong></td>
              </tr>
              <tr>
                <td><strong>D.1</strong></td>
                <td><strong>Kokurikuler</strong></td>
                <td style="text-align: center;" width="220"><strong>1.5</strong></td>
              </tr>
              <tr>
                <td><strong>D.2</strong></td>
                <td><strong>Ekstrakurikuler</strong></td>
                <td style="text-align: center;" width="220"><strong>1.0</strong></td>
              </tr>
            </tbody>
          </table>
          <p style="text-align: center;"><strong>Indeks Pengali Poin Untuk Status Peserta Pada Setiap Jenis Kegiatan</strong></p>
          <ul>
            <li style="list-style-type: none;">
              <ul>
                <li><strong>Poin dasar untuk setiap kegiatan adalah 25 (dua puluh lima)</strong></li>
              </ul>
            </li>
          </ul>
          <p><strong>Indeks Pengali Poin untuk status peserta pada setiap jenis kegiatan adalah angka pengali poin berdasarkan jenis kegiatan yang dibedakan atas publikasi,&nbsp;<em>workshop/training</em>/seminar, organisasi/kepanitiaan, perlombaan</strong></p>
          <ul>
            <li><strong>Indeks Pengali Poin Untuk Publikasi</strong>
              <ol>
                <li style="list-style-type: none;">
                  <ul>
                    <li><strong>Publikasi tulisan dapat dilakukan di media ilmiah (jurnal ilmiah internasional/nasional/prosiding) atau media popular (koran/mahjalah/bulletin), sedangkan tulisan di Blog dapat dinilai jika tulisan bernilai positif atau bermanfaat bagi orang lain atau orang banyak.</strong></li>
                    <li><strong>Indeks Pengali Poin untuk Publikasi dilakukan per-publikasi dan tidak tergantung pada lama kegiatan.</strong></li>
                    <li><strong>Indeks Pengali Poin untuk Publikasi dibedakan berdasarakan posisi mahasiswa dalam penulisan publikasi tersebut.</strong></li>
                    <li><strong>Indeks Pengali Poin untuk Publikasi seperti pada Tabel 2.</strong></li>
                  </ul>
                </li>
              </ol>
            </li>
          </ul>
          <p style="text-align: center;"><strong>Tabel 2. Indeks Penilaian Kegiatan Publikasi</strong></p>
          <table class="table table-striped" width="1051">
            <tbody>
              <tr>
                <td style="text-align: center;" width="25"><strong>No</strong></td>
                <td style="text-align: center;" width="171"><strong>Posisi</strong></td>
                <td style="text-align: center;" width="171"><strong>Jurnal Ilmiah Internasional</strong></td>
                <td style="text-align: center;" width="171"><strong>Jurnal Ilmiah Nasional/Prosiding Internasional</strong></td>
                <td style="text-align: center;" width="171"><strong>Prosiding Nasional</strong></td>
                <td style="text-align: center;" width="171"><strong>Media Populer</strong></td>
                <td style="text-align: center;" width="171"><strong>Blog</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>1</strong></td>
                <td style="text-align: center;" width="171"><strong>Sendiri</strong></td>
                <td style="text-align: center;" width="171"><strong>6.0</strong></td>
                <td style="text-align: center;" width="171"><strong>5.0</strong></td>
                <td style="text-align: center;" width="171"><strong>4.0</strong></td>
                <td style="text-align: center;" width="171"><strong>3.0</strong></td>
                <td style="text-align: center;" width="171"><strong>0.25 **</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>2</strong></td>
                <td style="text-align: center;" width="171"><strong>Penulis Pertama</strong></td>
                <td style="text-align: center;" width="171"><strong>5.0</strong></td>
                <td style="text-align: center;" width="171"><strong>4.0</strong></td>
                <td style="text-align: center;" width="171"><strong>3.0</strong></td>
                <td style="text-align: center;" width="171"><strong>2.0</strong></td>
                <td rowspan="2" width="171"></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>3</strong></td>
                <td style="text-align: center;" width="171"><strong>Non Pertama</strong></td>
                <td style="text-align: center;" width="171"><strong>4.0</strong></td>
                <td style="text-align: center;" width="171"><strong>3.0</strong></td>
                <td style="text-align: center;" width="171"><strong>2.0</strong></td>
                <td style="text-align: center;" width="171"><strong>1.0</strong></td>
              </tr>
            </tbody>
          </table>
          <p><strong>*) persyaratan jurnal dan prosiding mengikuti kriteria yang ditentukan oleh kementrian pendidikan dan budaya</strong></p>
          <p><strong>**) Sebanyak-banyaknya 0.5 untuk setiap semester</strong></p>
          <p><strong>Indeks Pengali Poin untuk Kegiatan Workshop/Training/Seminar</strong></p>
          <ul>
            <li><strong>Kegiatan mengikuti Workshop/Training/Seminar dibuktikan dengan sertifikat keikutsertaan</strong></li>
            <li><strong>Bekerja sebagai asisten matakuliah dan/atau praktikum dikategorikan sebagai fasilitator workshop/training.</strong></li>
            <li><strong>Indeks Pengali Poin untuk kegiatan workshop/training/Seminar seperti pada Tabel 3.</strong></li>
          </ul>
          <p style="text-align: center;"><strong>Tabel 3. Indeks Pengali Poin Kegiatan Worksop/Training Seminar</strong></p>
          <table class="table table-striped" width="818">
            <tbody>
              <tr>
                <td style="text-align: center;" width="27"><strong>No</strong></td>
                <td style="text-align: center;" width="385"><strong>Status</strong></td>
                <td style="text-align: center;" width="406"><strong>Indeks</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>1</strong></td>
                <td style="text-align: center;"><strong>Peserta</strong></td>
                <td style="text-align: center;"><strong>0.5</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>2</strong></td>
                <td style="text-align: center;"><strong>Fasilitator</strong></td>
                <td style="text-align: center;"><strong>2.0</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>3</strong></td>
                <td style="text-align: center;"><strong>Koordinator Fasilitator</strong></td>
                <td style="text-align: center;"><strong>3.0</strong></td>
              </tr>
            </tbody>
          </table>
          <p><strong>Organisasi/Kepanitiaan</strong></p>
          <ul>
            <li><strong>Kegiatan sebagai pengurus organisasi dihitung per semester dan selama-lamanya 2 semester;</strong></li>
            <li><strong>Kegiatan dalam kepanitiaan dihitung per kegiatan.</strong></li>
            <li><strong>Indeks Pengali Poin tidak tergantung pada lama kegiatan.</strong></li>
            <li><strong>Indeks Pengali Poin untuk kegiatan dalam organisasi/kepanitiaan seperti pada Tabel 4.</strong></li>
          </ul>
          <p style="text-align: center;"><strong>Tabel 4 Indeks Pengali Poin Kegiatan Organisasi/Kepanitiaan</strong></p>
          <table class="table table-striped" width="831">
            <tbody>
              <tr>
                <td style="text-align: center;" width="28"><strong>No</strong></td>
                <td style="text-align: center;" width="389"><strong>Status</strong></td>
                <td style="text-align: center;" width="207"><strong>Organisasi</strong></td>
                <td style="text-align: center;" width="207"><strong>Panitia</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>1</strong></td>
                <td style="text-align: center;"><strong>Anggota Organisasi selain HMJ</strong></td>
                <td style="text-align: center;"><strong>0.5</strong></td>
                <td style="text-align: center;"><strong>1.0</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>2</strong></td>
                <td style="text-align: center;"><strong>Pengurus/Panitia Non Inti/Koordinator</strong></td>
                <td style="text-align: center;"><strong>2.0</strong></td>
                <td style="text-align: center;"><strong>2.0</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>3</strong></td>
                <td style="text-align: center;"><strong>Pengurus Inti (Wakil, Bendahara, Sekretaris)</strong></td>
                <td style="text-align: center;"><strong>3.0</strong></td>
                <td style="text-align: center;"><strong>3.0</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>4</strong></td>
                <td style="text-align: center;"><strong>Ketua</strong></td>
                <td style="text-align: center;"><strong>5.0</strong></td>
                <td style="text-align: center;"><strong>4.0</strong></td>
              </tr>
            </tbody>
          </table>
          <p><strong>Perlombaan</strong></p>
          <p><strong>Indeks Pengali Poin untuk kegiatan mengikuti perlombaan seperti pada Tabel 5.</strong></p>
          <p style="text-align: center;"><strong>Tabel 5 Indeks Pengali Poin Kegiatan Mengikuti Perlombaan&nbsp;&nbsp;( Indeks pengali poin tidak tergantung pada lama kegiatan)</strong></p>
          <table class="table table-striped" width="831">
            <tbody>
              <tr>
                <td style="text-align: center;" width="28"><strong>No</strong></td>
                <td style="text-align: center;" width="389"><strong>Status</strong></td>
                <td style="text-align: center;" width="207"><strong>Kokurikuler</strong></td>
                <td style="text-align: center;" width="207"><strong>Ekstrakurikuler</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>1</strong></td>
                <td style="text-align: center;"><strong>Peserta</strong></td>
                <td style="text-align: center;"><strong>0.5</strong></td>
                <td style="text-align: center;"><strong>0.5</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>2</strong></td>
                <td style="text-align: center;"><strong>Juara Harapan Perorangan</strong></td>
                <td style="text-align: center;"><strong>2.0</strong></td>
                <td style="text-align: center;"><strong>1.5</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>3</strong></td>
                <td style="text-align: center;"><strong>Juara Harapan Beregu</strong></td>
                <td style="text-align: center;"><strong>1.25</strong></td>
                <td style="text-align: center;"><strong>0.75</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>4</strong></td>
                <td style="text-align: center;"><strong>Juara 2 atau 3 Perorangan</strong></td>
                <td style="text-align: center;"><strong>2.5</strong></td>
                <td style="text-align: center;"><strong>2.0</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>5</strong></td>
                <td style="text-align: center;"><strong>Juara 2 atau 3 Beregu</strong></td>
                <td style="text-align: center;"><strong>1.5</strong></td>
                <td style="text-align: center;"><strong>1.25</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>6</strong></td>
                <td style="text-align: center;"><strong>Juara 1 Perorangan</strong></td>
                <td style="text-align: center;"><strong>3.5</strong></td>
                <td style="text-align: center;"><strong>3.0</strong></td>
              </tr>
              <tr>
                <td style="text-align: center;"><strong>7</strong></td>
                <td style="text-align: center;"><strong>Juara 1 Beregu</strong></td>
                <td style="text-align: center;"><strong>2.25</strong></td>
                <td style="text-align: center;"><strong>2.0</strong></td>
              </tr>
            </tbody>
          </table>
          <p style="text-align: center;">
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection