@extends('layouts.master')

@section('title', 'List Members')

@section('content')
<div class="container" style="padding: 10px;">
    <div>
        <h3>Manage Members</h3>
    </div>
    <div>
        <a href="/members/create">Create new Member</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr> 
                <th>#</th>
                <th>Email</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>User Type</th>
                <th>Maximum Book Can Barrow</th>
                <th>Books on Hand</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if (count($users) > 0)
                @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->user_type }}</td>
                        <td>{{ $user->maximum_books_can_loan }}</td>
                        <td>{{ $user->current_books_on_hand }}</td>
                        <td>
                            <a href="/members/edit/{{ $user->id }}">Edit</a> |
                            <a href="javascript: deleteBook('{{ $user->id }}');">Delete</a>
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
    if (confirm("Are you sure you want to delete this member?") == true) {
        window.location = "/members/delete/" + id;
        return true;
    }
}
</script>

@stop