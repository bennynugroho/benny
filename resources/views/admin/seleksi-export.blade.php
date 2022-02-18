<table border="1">
    <thead>
        <tr>
            <th>No.</th>
            <th>Tahun Akademik</th>
            <th>Nama</th>
            <th>Nomor Pendaftaran</th>
            <th>Jalur Masuk</th>
            <th>Asal Sekolah</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($seleksi as $i => $d)
        <tr>
            <td>{{ $i+1 }}</td>
            <td width="20">{{ $d->tahun_akademik->tahun }}</td>
            <td width="40">{{ $d->daftar->nama }}</td>
            <td width="20">{{ $d->nim }}</td>
            <td width="20">{{ $d->daftar->jalur->judul }}</td>
            <td width="40">{{ $d->daftar->slta }}</td>
        </tr>
        @endforeach
    </tbody>
</table>