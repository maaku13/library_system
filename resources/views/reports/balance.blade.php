@extends('layouts.master')

@section('title', 'Book Information')

@section('content')
<div class="container" style="padding: 10px;">
    <a href="/reports/loans">Books on Loan</a> | <a href="/reports/balance">Balance Quantities</a>
</div>
<div class="container" style="padding: 10px;">
    <div>
        <h3>Book Balance</h3>
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

@stop