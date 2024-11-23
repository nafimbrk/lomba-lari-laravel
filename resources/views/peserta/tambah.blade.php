<x-template judul="Tambah Data Peserta">
    <h2 class="mt-4 mb-4">Tambah Peserta</h2>
    <form method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" id="nama" name="nama" class="form-control" aria-describedby="namaHelp" placeholder="Masukkan nama" required minlength="3" maxlength="50" value="{{ session('nama') ?? old('nama') }}">
            <small id="namaHelp" class="text-zmuted">
              @error('nama')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </small>
          </div>
        <div class="form-group mb-3">
            <label for="usia" class="form-label">Usia</label>
            <input type="text" id="usia" name="usia" class="form-control" aria-describedby="usiaHelp" placeholder="Masukkan usia" maxlength="100" value="{{ session('usia') ?? old('usia') }}">
            <small id="usiaHelp" class="text-muted">
              @error('usia')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </small>
          </div>
        <div class="form-group mb-4">
          <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
          <select id="jeniskelamin" name="jenis_kelamin" class="form-control" aria-describedby="jeniskelaminHelp" required>
              <option value="" disabled selected>-- Pilih jenis kelamin --</option>
              <option value="Laki-laki" {{ (session('jenis_kelamin') ?? old('jenis_kelamin')) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
              <option value="Perempuan" {{ (session('jenis_kelamin') ?? old('jenis_kelamin')) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
          </select>
          <small id="jeniskelaminHelp" class="text-muted">
              @error('jenis_kelamin')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
          </small>
          
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary me-2">Tambah</button>
            <a href="{{ url('peserta') }}" class="btn btn-secondary">Kembali</a>
          </div>
    </form>
</x-template>