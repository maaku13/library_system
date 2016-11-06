@extends('layouts.master')

@section('title', 'Book Information')

@section('content')
<div class="container" style="padding: 10px;">
    <div>
        <h3>Manage Books</h3>
    </div>
    <div>
        <a href="/books/create">Create new Book</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr> 
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Quantity</th>
                <th>On loaned</th>
                <th>Available</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (count($books) > 0)
                @foreach ($books as $key => $book)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->isbn }}</td>
                        <td>{{ $book->quantities }}</td>
                        <td>{{ $book->on_loan }}</td>
                        <td>{{ $book->available }}</td>
                        <td>
                            <a href="/books/edit/{{ $book->id }}">Edit</a> |
                            <a href="javascript: deleteBook('{{ $book->id }}');">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="8">No records</td>
                </tr>
            @endif
            
        </tbody>
    </table>
</div>

<script type="text/javascript">
function deleteBook(id) {
    if (confirm("Are you sure you want to delete this book?") == true) {
        window.location = "/books/delete/" + id;
        return true;
    }
}
</script>

@stop