<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping Example</title>
</head>
<body>
    @foreach ($datas as $data)
        <h3>{{ $data }}</h3>
    @endforeach
</body>
</html>