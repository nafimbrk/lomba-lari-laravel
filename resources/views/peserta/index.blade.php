<x-template judul="Data Peserta">
    <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
        <h2>Data Peserta</h2>
        <a href="{{ url('peserta/tambah') }}">
            <button class="btn btn-primary">Tambah Peserta</button>
        </a>
    </div>
    
    @if (session('pesan'))
        <div class="alert alert-success">
            {{ session('pesan') }}
        </div>
    @endif
    @if (session('gagal'))
        <div class="alert alert-danger">
            {{ session('gagal') }}
        </div>
    @endif
    <table class="table table-bordered border-dark">
        <thead class="table-dark">
            <tr>
                <th>Nama</th>
                <th>Usia</th>
                <th>Jenis Kelamin</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($peserta as $ps)
                <tr>
                    <td>{{ $ps['nama'] }}</td>
                    <td>{{ $ps['usia'] }}</td>
                    <td>{{ $ps['jenis_kelamin'] }}</td>
                    <td>
                        <a href="{{ url('peserta/update/' . $ps->id) }}" class="me-1">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <a href="{{ url('peserta/hapus/' . $ps->id) }}">
                            <button class="btn btn-danger">Hapus</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-template>
