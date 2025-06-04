<h1>Books</h1>
<a href="{{ route('books.create') }}">Create a book</a>
<ul>
    @foreach($books as $book)
        <li>
            <h2>{{ $book->title }}</h2>
            <div>
                <a href="{{ route('books.show', $book) }}">Show</a>
                <a href="{{ route('books.edit', $book) }}">Edit</a>
                <form action="{{ route('books.destroy', $book) }}" method="post">
                    @csrf 
                    @method('DELETE')
                    <button>DELETE</button>
                </form>
            </div>
        </li>
    @endforeach
</ul>