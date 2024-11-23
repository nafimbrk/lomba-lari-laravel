<x-template judul="Data Peserta">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
        <h2>Daftar Peserta Terdaftar</h2>
            <a href="{{ url('pendaftaran/create') }}">
                <button class="btn btn-primary">Tambah Peserta</button>
            </a>
        </div>
        
        <div class="mb-4">
            <form action="{{ url('pendaftaran') }}" method="GET" class="d-inline-flex align-items-center">
                <label for="sort" class="form-label mb-0 me-2">Urutkan</label>
                <select name="sort" id="sort" class="form-select form-select-sm" onchange="this.form.submit()">
                    <option value="asc" {{ $sortOrder == 'asc' ? 'selected' : '' }}>Terpendek</option>
                    <option value="desc" {{ $sortOrder == 'desc' ? 'selected' : '' }}>Terpanjang</option>
                </select>
            </form>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <table class="table table-bordered border-dark">
            <thead class="table-dark">
                <tr>
                    <th>Nama Peserta</th>
                    <th>Jenis Kelamin</th>
                    <th>Jarak</th>
                    <th>Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pendaftaran as $item)
                    <tr>
                        <td>{{ $item->peserta->nama }}</td>
                        <td>{{ $item->peserta->jenis_kelamin }}</td>
                        <td>{{ $item->jarak->jarak }} m</td>
                        <td>{{ $item->jarak->level }}</td>
                        <td>
                            <a href="{{ route('pendaftaran.edit', $item->id) }}" class="btn btn-warning me-1">Edit</a>
                            <form action="{{ route('pendaftaran.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-template>
