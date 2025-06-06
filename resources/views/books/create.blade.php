<h1>New book</h1>

<form action="{{ route('books.store') }}" method="post">
    @csrf
    <input type="text" name="title" value="{{ old('title') }}" placeholder="title goes here">
    <input type="text" name="author" value="{{ old('author') }}" placeholder="author goes here">
    <input type="date" name="released_at" value="{{ old('released_at') }}" placeholder="date goes here">
    <input type="submit" value="Create">
</form>