@extends('layouts.master')

@section('title', 'Book Information')

@section('content')
<div class="container" style="padding: 10px;">
    <div>
        <h3>Create New Book</h3>
    </div>

    <div style="width: 400px;" class="center-block">
    <form method="POST" action="/books/create">
        {!! csrf_field() !!}
        
        <div class="form-group">
            <label for="exampleInputTitle">Title</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputAuthor">Author</label>
            <input type="text" name="author" id="author" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputISBN">ISBN</label>
            <input type="text" name="isbn" id="isbn" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="exampleInputQuantities">Quantities</label>
            <input type="text" name="quantities" id="quantities" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="exampleInputShelfLocation">Shelf Location</label>
            <input type="text" name="shelf_location" id="shelf_location" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-default">Create</button>
            <button type="button" onclick="javascript: window.history.back();" class="btn btn-default">Cancel</button>
        </div>
    </form>
    </div>
</div>
@stop



