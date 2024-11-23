<x-template judul="Data Jarak">
    <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
        <h2>Data Jarak</h2>
        <a href="{{ url('jarak/tambah') }}">
            <button class="btn btn-primary">Tambah Jarak</button>
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
                <th>Jarak</th>
                <th>Level</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jarak as $jk)
                <tr>
                    <td>{{ $jk['jarak'] }} m</td>
                    <td>{{ $jk['level'] }}</td>
                    <td>
                        <a href="{{ url('jarak/update/' . $jk->id) }}" class="me-1">
                            <button class="btn btn-warning">Edit</button>
                        </a>
                        <a href="{{ url('jarak/hapus/' . $jk->id) }}">
                            <button class="btn btn-danger">Hapus</button>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-template>
