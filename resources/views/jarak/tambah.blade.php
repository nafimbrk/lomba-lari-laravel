<x-template judul="Tambah Data Jarak">
    <h2 class="mt-4 mb-4">Tambah Jarak</h2>
    <form method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="jarak" class="form-label">Jarak</label>
            <input type="number" id="jarak" name="jarak" class="form-control" aria-describedby="jarakHelp" placeholder="Masukkan jarak" required value="{{ session('jarak') ?? old('jarak') }}">
            <small id="jarakHelp" class="text-zmuted">
              @error('jarak')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
            </small>
          </div>
        <div class="form-group mb-4">
    <label for="level" class="form-label">Level</label>
    <select id="level" name="level" class="form-control" aria-describedby="levelHelp" required>
        <option value="" disabled selected>-- Pilih level --</option>
        <option value="Easy" {{ (session('level') ?? old('level')) == 'Easy' ? 'selected' : '' }}>Easy</option>
        <option value="Moderate" {{ (session('level') ?? old('level')) == 'Moderate' ? 'selected' : '' }}>Moderate</option>
        <option value="Hard" {{ (session('level') ?? old('level')) == 'Hard' ? 'selected' : '' }}>Hard</option>
        <option value="Extreme" {{ (session('level') ?? old('level')) == 'Extreme' ? 'selected' : '' }}>Extreme</option>
    </select>
    <small id="levelHelp" class="text-muted">
        @error('level')
        <p class="text-danger">{{ $message }}</p>
        @enderror
    </small>

</div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary me-2">Tambah</button>
            <a href="{{ url('jarak') }}" class="btn btn-secondary">Kembali</a>
          </div>
    </form>
</x-template>