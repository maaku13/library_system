@extends('layouts.master')

@section('title', 'Book Information')

@section('content')
<div class="container" style="padding: 10px;">
    <a href="/reports/loans">Books on Loan</a> | <a href="/reports/balance">Balance Quantities</a>
</div>
<div class="container" style="padding: 10px;">
    <div>
        <h3>Books On Loan</h3>
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
                <th>Loaned By</th>
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
                            {{ $book->first_name }} {{ $book->last_name }} 
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

@stop