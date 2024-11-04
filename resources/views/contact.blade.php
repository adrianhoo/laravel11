<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman About</title>
</head>
<body>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/blog">blog</a>
    <a href="/contact">contact</a>
    <h2>{{ $nama }}</h2>
    <h1>halaman Contact</h1>

    <form action="" method="post">
        <h2>Contact Me</h2>
        <label for="name">Nama : </label>
        <input type="text" id="name"> <br> <br>
        <label for="number">Phone Number : </label>
        <input type="tel" id="number"> <br> <br>
        <label for="email">Email : </label>
        <input type="email" name="email" id="email"> <br> <br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>