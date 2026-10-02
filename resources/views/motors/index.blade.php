<ul>
    @foreach($motors as $motor)
        <li>{{ $motor->nama }} - Rp {{ $motor->harga }} (Stok: {{ $motor->stok }})</li>
        <a href="/motors/{{ $motor->id }}/edit">Edit</a>
    @endforeach
</ul>