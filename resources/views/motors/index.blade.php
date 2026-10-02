<ul>
    @foreach($motors as $motor)
        <li>{{ $motor->nama }} - Rp {{ $motor->harga }} (Stok: {{ $motor->stok }})</li>
    @endforeach
</ul>