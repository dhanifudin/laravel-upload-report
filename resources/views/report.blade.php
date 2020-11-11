<html>
    <head>
    <title>
    </title>
    </head>
    <body>
        <table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['address'] }}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>
