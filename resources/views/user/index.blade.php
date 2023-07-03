<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($display as $row )
<ul>
    <li>{{$row->name}}</li>
    <li>{{$row->email}}</li>
    <li>{{$row->password}}</li>
    <li>{{$row->conform_password}}</li>
    <li>{{$row->select}}</li>



</ul>
    @endforeach
</body>
</html>
