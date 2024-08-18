<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Them Phong Moi</h1>
    <h2>Them Phong</h2>
    <form action="room" method="post">
        @csrf
        <input type="text"  name="room_name" required placeholder="Nhap ten phong">
        <br>
        <button type="submit">Them</button>
    </form>
</body>
</html>