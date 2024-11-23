<x-template judul="Data Peserta">
<div class="container">
    <h2 class="mt-4 mb-4">Edit Pendaftaran</h2>
    <form action="{{ route('pendaftaran.update', $pendaftaran->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="peserta_id" class="form-label">Nama Peserta</label>
            <select id="peserta_id" name="peserta_id" class="form-control">
                @foreach($peserta as $p)
                <option value="{{ $p->id }}" {{ $pendaftaran->peserta_id == $p->id ? 'selected' : '' }}>
                    {{ $p->nama }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label for="jarak_id" class="form-label">Jarak</label>
            <select id="jarak_id" name="jarak_id" class="form-control">
                @foreach($jarak as $j)
                <option value="{{ $j->id }}" {{ $pendaftaran->jarak_id == $j->id ? 'selected' : '' }}>
                    {{ $j->jarak }}m - {{ $j->level }}
                </option>
                @endforeach
            </select>
        </div>

        
        

        <button type="submit" class="btn btn-primary me-2">Edit</button>
        <a href="{{ url('pendaftaran') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
</x-template>