@extends('layouts.master')

@section('title', 'Book Information')

@section('content')
<div class="container" style="padding: 10px;">
    <div>
        <h3>{{ $page_title }}</h3>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr> 
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>ISBN</th>
                <th>Quantity</th>
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
                        <td>{{ $book->available }}</td>
                        <td>
                            <a href="/books/{{ $book->id }}">Details</a> 
                            @if ($book_allowance > 0)
                                | <a href="javascript: barrowBook({{ $book->id }});">Barrow</a>
                            @else
                                | <a href="javascript:alert('Return first a book');">Barrow</a>
                            @endif
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
function barrowBook(id) {
    if (confirm("Do you want to barrow this book?") == true) {
        window.location = "/books/barrow/" + id;
        return true;
    }
}
</script>

@stop