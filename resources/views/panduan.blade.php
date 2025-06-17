<!DOCTYPE html>
<html>
<head>
    <title>Panduan Penggunaan</title>
</head>
<body>
    <h1>Panduan Penggunaan</h1>

    @foreach ($loginGuides as $item)
        <div style="margin-bottom: 20px;">
            <h2>{{ $item->title }}</h2>

           @if ($item->image)
            <img src="{{ asset('storage/' . $item->image) }}" alt="Gambar Panduan" style="max-width: 300px;">
            @endif

           

            <p>{{ $item->description }}</p>
        </div>
    @endforeach
</body>
</html>
