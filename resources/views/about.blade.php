<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>About</title>
</head>
<body>
    <!-- cara 1 -->
    <h1>About Muziro</h1>
    <h3> <?php echo $nama; ?> </h3>
    <p> <?php echo $email; ?></p>
    <img src="image/<?php echo $gambar; ?>" alt="<?php echo $nama; ?>" width="200px">

    <!-- cara2 -->
    <h1>About Muziro</h1>
    <h3> <?= $nama; ?> </h3>
    <p> <?= $email; ?> </p>
    <img src="image/<?= $gambar; ?>" alt="<?= $nama; ?>" width="200px">

    <!-- cara 3 -->
    <!-- cara 1 -->
    <h1>About Muziro</h1>
    <h3> {{ $nama }} </h3>
    <p> {{ $email }}</p>
    <img src="image/{{ $gambar }}" alt="{{ $nama }}" width="200px">
</body>
</html>