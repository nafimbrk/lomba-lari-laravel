<x-template judul="Ubah Data Jarak">
    <h2 class="mt-4 mb-4">Ubah Jarak</h2>
    <form method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="jarak" class="form-label">Jarak</label>
            <input type="number" id="jarak" name="jarak" class="form-control" aria-describedby="jarakHelp" placeholder="Masukkan jarak" required minlength="3" maxlength="50" value="{{ $jarak['jarak'] ?? old('jarak') }}">
            <small id="jarakHelp">
              <?php $allowed = "<br>jarak hanya boleh mengandung angka"; ?>
              @error('jarak')
                  <p class="text-danger">{{ $message }}<?= $allowed ?></p>
              @enderror
            </small>
          </div>
        <div class="form-group mb-4">
          <label for="level" class="form-label">Level</label>
          <select id="level" name="level" class="form-control" aria-describedby="levelHelp" required>
              <option value="" disabled selected>Pilih level</option>
              <option value="Easy" {{ ($jarak['level'] ?? old('level')) == 'Easy' ? 'selected' : '' }}>Easy</option>
        <option value="Moderate" {{ ($jarak['level'] ?? old('level')) == 'Moderate' ? 'selected' : '' }}>Moderate</option>
        <option value="Hard" {{ ($jarak['level'] ?? old('level')) == 'Hard' ? 'selected' : '' }}>Hard</option>
        <option value="Extreme" {{ ($jarak['level'] ?? old('level')) == 'Extreme' ? 'selected' : '' }}>Extreme</option>
        
        
                  </select>
          <small id="levelHelp" class="text-muted">
              @error('level')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
          </small>
          
          </div>
        
          <div class="form-group">
            <input type="hidden" name="id" value="{{ $jarak['id'] ?? old('id') }}">
            <button type="submit" class="btn btn-primary me-2">Ubah</button>
            <a href="{{ url('jarak') }}" class="btn btn-secondary">Kembali</a>
          </div>
    </form>
</x-template>