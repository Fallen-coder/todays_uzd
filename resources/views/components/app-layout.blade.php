<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin:auto;
            text-align:center;
        }
    </style>
</head>
<body>
    <nav>
            <a href="{{ route('books.index') }}" >All Books</a>
            <a href="{{ route('books.create') }}" >Add Book</a>
</nav>
    <main>
        {{ $slot }}
    </main>
</body>
</html>