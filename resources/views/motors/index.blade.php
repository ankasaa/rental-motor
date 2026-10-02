<ul>
    @foreach($motors as $motor)
        <li>{{ $motor->nama }} - Rp {{ $motor->harga }} (Stok: {{ $motor->stok }})
            {{-- untuk edit fitur --}}
            <a href="/motors/{{ $motor->id }}/edit">Edit</a>
            {{-- untuk delete fitur --}}
            <form action="/motors/{{ $motor->id }}" method="POST" style="display: inline";>
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Apakah Yakin untuk Menghapus data ini?')">Hapus</button>
            </form>
        </li>
    @endforeach
</ul>