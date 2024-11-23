<x-template judul="Hapus Data Jarak">
    <h2 class="mt-4 mb-4">Hapus Jarak</h2>
    <form method="post">
        @csrf
        <div class="form-group mb-3">
            <label for="jarak" class="form-label">Jarak</label>
            <input type="number" id="jarak" name="jarak" class="form-control" aria-describedby="jarakHelp" value="{{ $jarak['jarak'] ?? '' }}" disabled>
            <small id="jarakHelp">
              
            </small>
          </div>
        <div class="form-group mb-3">
            <label for="level" class="form-label">Level</label>
            <input type="text" id="level" name="level" class="form-control" aria-describedby="levelHelp" value="{{ $jarak['level'] ?? '' }}" disabled>
            <small id="levelHelp" class="text-muted">
              
            </small>
</div>
          <div class="form-group">
            <input type="hidden" name="id" value="{{ $jarak['id'] ?? '' }}">
            <button type="submit" class="btn btn-primary me-2">Hapus</button>
            <a href="{{ url('jarak') }}" class="btn btn-secondary">Kembali</a>
          </div>
    </form>
</x-template>