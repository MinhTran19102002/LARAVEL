<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ten Cac Phong</h1>
    <ul>
        <?php foreach ($rooms as $room): ?>
            <li><?php echo htmlspecialchars($room->name); ?></li>
        <?php endforeach; ?>
    </ul>
    {{-- <a href="room/add" class="btn btn-primary"  role="button">Them phong</a> --}}
    <button onclick="location.href='addroom'">Them phong</button>
</body>
</html>