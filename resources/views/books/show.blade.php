@extends('layouts.master')

@section('title', 'Book Information')

@section('content')
<div class="container" style="padding: 10px;">
    <div>
        <h3>Book Details</h3>
    </div>
  
    <div style="width: 500px;">
        <div class="form-group">
            <label for="exampleInputTitle">Title</label>
            <input type="text" name="title" id="title" value="{{ $book->title }}" class="form-control" readonly="readonly">
        </div>

        <div class="form-group">
            <label for="exampleInputAuthor">Author</label>
            <input type="text" name="author" id="author" value="{{ $book->author }}" class="form-control" readonly="readonly">
        </div>

        <div class="form-group">
            <label for="exampleInputISBN">ISBN</label>
            <input type="text" name="isbn" id="isbn" value="{{ $book->isbn }}" class="form-control" readonly="readonly">
        </div>
        
        <div class="form-group">
            <label for="exampleInputQuantities">Quantities</label>
            <input type="text" name="quantities" id="quantities" value="{{ $book->quantities }}" class="form-control" readonly="readonly">
        </div>
        
        <div class="form-group">
            <label for="exampleInputShelfLocation">Shelf Location</label>
            <input type="text" name="shelf_location" id="shelf_location" value="{{ $book->shelf_location }}" class="form-control" readonly="readonly">
        </div>

        <div class="form-group">
            <button type="button" onclick="javascript: window.history.back();" class="btn btn-default">Back</button>
        </div>
    </div>
</div>
@stop



