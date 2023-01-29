<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    {!! Form::open(['url' => 'submit', "method" => "post"]) !!}
    <input type="text" name="us" placeholder="Enter Your User Name" />
    <input type="password" name="ps" placeholder="Enter Your Password">
    <button type="submit">Okay</button>
    {!! Form::close() !!}
</body>

</html>