<x-app-layout>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<h2>{{ $book->title }}</h2>
<h3>{{ $book->author }}</h3>
<p>{{ $book->released_at }}</p>
<a href="{{ route('books.index') }}">All books</a>
</x-app-layout>