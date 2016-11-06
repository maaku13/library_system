@extends('layouts.master')

@section('title', 'Book Information')

@section('content')
<div class="container" style="padding: 10px;">
    <div>
        <h3>Books On Hand</h3>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr> 
                <th>#</th>
                <th>Title</th>
                <th>Author</th>
                <th>Barrow Date</th>
                <th>Expiry Date</th>
                <th>Penalty Fee</th>
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
                        <td>{{ $book->date_barrowed }}</td>
                        <td>{{ $book->date_expiry }}</td>
                        <td>$ {{ number_format((float) $book->amount, 2) }}</td>
                        <td>
                            <a href="javascript: returnBook({{ $book->book_load_id }});">Return</a>
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
function returnBook(id) {
    if (confirm("Return and pay the fee?") == true) {
        window.location = "/books/return/" + id;
        return true;
    }
}
</script>

@stop