<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="css/style.css">
    @vite('resources/css/app.css')
</head>
<body>
    <!-- Navbar -->
    <nav>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="blog.html">Blog</a>
    </nav>
    
    <!-- Content -->
    <div class="container ">
        <h1 class="">About Me</h1>
        <p>{{ $name }}</p>
        <p>{{ $email }}</p>
        <img src="img/{{ $img }}" alt="" width=150px>
    </div>
</body>
</html>
