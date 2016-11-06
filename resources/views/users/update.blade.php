@extends('layouts.master')

@section('title', 'Book Information')

@section('content')
<div class="container" style="padding: 10px;">
    <div>
        <h3>Edit a User</h3>
    </div>

    <div style="width: 400px;" class="center-block">
    <form method="POST" action="/members/update/{{ $user->id }}">
        
        <div class="form-group">
            <label for="exampleInputEmail">Email</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword">Password</label>
            <input type="password" name="password" id="password" value="{{ $user->password }}" class="form-control">
            <input type="hidden" name="password_old" id="password_old" value="{{ $user->password }}">
        </div>

        <div class="form-group">
            <label for="exampleInputLastName">Last Name</label>
            <input type="text" name="last_name" id="last_name" value="{{ $user->last_name }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="exampleInputFirstName">First Name</label>
            <input type="text" name="first_name" id="first_name" value="{{ $user->first_name }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="exampleInputBirthday">Birthday (YYYY-MM-DD)</label>
            <input type="text" name="birthday" id="birthday" value="{{ $user->birthday }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="exampleInputUserType">User type</label>
            <select name="user_type" id="user_type" onchange="userTypeChange();" class="form-control">
                <option value="MEMBER">MEMBER</option>
                <option value="JUNIOR_MEMBER">JUNIOR_MEMBER</option>
                <option value="ADMIN">ADMIN</option>
            </select>
        </div>
        
        <div class="form-group">
            <label for="exampleInputAddress">Address</label>
            <input type="text" name="address" id="address" value="{{ $user->address }}" class="form-control">
        </div>
        
        <div class="form-group">
            <label for="exampleInputMaximumBooksCanBarrow">Maximum books can barrow</label>
            <input type="text" name="maximum_books_can_loan" id="maximum_books_can_loan" value="{{ $user->maximum_books_can_loan }}" readonly="readonly" class="form-control">
        </div>

        <div>
            <button type="submit" class="btn btn-default">Update</button>
            <button type="button" onclick="javascript: window.history.back();" class="btn btn-default">Cancel</button>
        </div>
    </form>
    </div>
</div>
@stop

<script type="text/javascript">
    function userTypeChange() {
        var userType = $('#user_type').val();
        
        var canLoan = 10;
        switch(userType) {
            case 'MEMBER':
                canLoan = 6;
                break;
            case 'JUNIOR_MEMBER':
                canLoan = 3;
                break;
            default:
                break;
        }
        $('#maximum_books_can_loan').val(canLoan);
    }
</script>


