<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text" style="padding-top: 20px;">
            &nbsp;
        </div>
    </div>
</header>
@if (Auth()->check() !== false)
<div class="container" style="padding: 10px;">
    {{ Auth::user()->last_name }} {{ Auth::user()->first_name }} |
    {{ Auth::user()->user_type }} |
    Book allowance: {{ Auth::user()->maximum_books_can_loan }}
</div>
@endif