<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/customer/register" method="post">
        @csrf
        <div>
            name<input type="text" name="name">
        </div>
        <div>
            email<input type="text" name="email">
        </div>
        <div>
            birthday<input type="date" name="birthday">
        </div>
        <div>
            phone<input type="text" name="phone">
        </div>
        <div>
            address<input type="text" name="address">
        </div>
        <div>
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
        </div>
    </form>
</body>
</html>
