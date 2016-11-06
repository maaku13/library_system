<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="/">Library System</a>
        </div>
        
        @if (Auth()->check() !== false)
            <!-- Collect the nav links, forms, and other content for toggling -->
            @if (Auth::user()->user_type === 'ADMIN')
                <!-- Admin menu -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ url('books/manage') }}">Manage Books</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ url('members/manage') }}">Manage Members</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ url('reports') }}">View Report</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ url('auth/logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            @else
               <!-- Member menu -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ url('books/search') }}">Search or barrow a Book</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ url('books/return') }}">Return a Book</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ url('auth/logout') }}">Logout</a>
                        </li>
                    </ul>
                </div>
            @endif
            <!-- /.navbar-collapse -->
        @endif
    </div>
    <!-- /.container-fluid -->
</nav>