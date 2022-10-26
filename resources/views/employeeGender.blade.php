<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gernder</title>
</head>
<body>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <table>
        <tr>
            <th>Male</th>
            <th>Female</th>
        </tr>
        @for ($i = 0; $i < count($females); $i++)
            <tr>
                <td>{{ $males[$i] }}</td>
                <td>{{ $females[$i] }}</td>
            </tr>
        @endfor
    </table>
</body>
</html>
