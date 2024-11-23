<x-template judul="Hapus Data Peserta">
    <h2 class="mt-4 mb-4">Hapus Peserta</h2>
    <form method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" aria-describedby="namaHelp" value="{{ $peserta['nama'] ?? "" }}" disabled>
            <small id="namaHelp" class="text-zmuted">
              
            </small>
          </div>
        <div class="form-group mb-3">
            <label for="usia" class="form-label">Usia</label>
            <input type="text" id="usia" name="usia" class="form-control" aria-describedby="usiaHelp" value="{{ $peserta['usia'] ?? "" }}" disabled>
            <small id="usiaHelp" class="text-muted">
              
            </small>
          </div>
        <div class="form-group mb-4">
            <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
            <input type="text" id="jeniskelamin" name="jenis_kelamin" class="form-control" aria-describedby="jeniskelaminHelp" value="{{ $peserta['jenis_kelamin'] ?? "" }}" disabled>
            <small id="jeniskelaminHelp" class="text-muted">
              
            </small>
          </div>
          <div class="form-group">
            <input type="hidden" name="id" value="{{ $peserta['id'] ?? "" }}">
            <button type="submit" class="btn btn-primary me-2">Hapus</button>
            <a href="{{ url('peserta') }}" class="btn btn-secondary">Kembali</a>
          </div>
    </form>
</x-template>