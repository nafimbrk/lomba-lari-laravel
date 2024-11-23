<x-template judul="Data Peserta">
    <div class="container mt-4">
        <h2 class="mb-4">Formulir Pendaftaran Lomba Lari</h2>

        
                <form action="{{ route('pendaftaran.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="peserta_id" class="form-label">Pilih Peserta</label>
                        <select name="peserta_id" id="peserta_id" class="form-select" required>
                            <option value="" selected disabled>-- Pilih Peserta --</option>
                            @foreach($peserta as $p)
                                <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="jarak_id" class="form-label">Pilih Jarak</label>
                        <select name="jarak_id" id="jarak_id" class="form-select" required>
                            <option value="" selected disabled>-- Pilih Jarak --</option>
                            @foreach($jarak as $j)
                                <option value="{{ $j->id }}">{{ $j->jarak }}m - {{ $j->level }}</option>
                            @endforeach
                        </select>
                    </div>

                   

                    <div>
                        <button type="submit" class="btn btn-primary me-2">Daftar</button>
                        <a href="{{ url('pendaftaran') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </form>
            
    </div>
</x-template>
