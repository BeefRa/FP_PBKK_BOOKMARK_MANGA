<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
</head>
<body>
    <h1>Manga List</h1>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Image</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mangaList as $manga)
                <tr>
                    <td>{{ $manga->judul }}</td>
                    <td><img src="{{ $manga->image }}" alt="{{ $manga->judul }}" style="max-width: 100px; max-height: 100px;"></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>