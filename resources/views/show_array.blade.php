<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h3{
            color: orangered;
            margin-top: 35px;
            text-align: center;
            font-size: 20px;
        }
    </style>
</head>
<body bgcolor="black">
    @if (count($Names) > 0)
        @foreach ($Names as $i)
                <h3>Full Name :{{$i -> First_Name}} {{$i -> Last_Name}} </h3> 
        @endforeach
    @else
        <h3>No Student Exist</h3>
    @endif
</body>
</html>