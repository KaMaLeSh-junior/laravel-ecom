<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
<h1 style='text-align:center;'>Test</h1>
@foreach($datas as $data)
    <h1>{{$data['name']}}</h1>
    <p>{{$data['words']}}</p>
@endforeach
</body>
</html>