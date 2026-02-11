<!DOCTYPE html>
<html>
<head>
    <title>Superpowers</title>
</head>
<body>
    <h1>Superpowers</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach($superpowers as $power)
            <tr>
                <td>{{ $power->id }}</td>
                <td>{{ $power->name }}</td>
                <td>{{ $power->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>