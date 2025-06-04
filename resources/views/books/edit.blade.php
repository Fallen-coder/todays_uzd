<h1>Edit book</h1>

<form action="/books/{{ $editbook->id }}/update" method="post">
    @csrf
    @method('put')

    <input type="text" name="title" placeholder="title goes here" value="{{ $editbook->title }}">
    <input type="text" name="author" placeholder="author goes here" value="{{ $editbook->author }}">
    <input type="date" name="released_at" placeholder="date goes here" value="{{ $editbook->released_at }}">
    <input type="submit" value="Update">
</form>