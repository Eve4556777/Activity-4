<!DOCTYPE html>
<html>
<head>
    <title>Universes</title>
</head>
<body>
    <h1>Universes</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Company</th>
                <th>Era</th>
            </tr>
        </thead>
        <tbody>
            @foreach($universes as $universe)
            <tr>
                <td>{{ $universe->id }}</td>
                <td>{{ $universe->universe }}</td>
                <td>{{ $universe->company }}</td>
                <td>{{ $universe->era }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>