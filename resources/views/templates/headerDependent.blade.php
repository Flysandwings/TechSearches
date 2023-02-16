<body>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    @if(session('role') === "finder")
                        <div class="panel-heading">All Available Jobs</div>
                        <div class="panel-body">
                    @elseif(session('role') === "searcher")
                        <div class="panel-heading">Your Posts</div>
                        <div class="panel-body">
                        <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
                    @endif
                        <a href="{{ route('successLogin') }}" class="btn btn-info mb-3">Back</a>
                        <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
                        
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Closed</th>
                                <th>Edit</th>
                            </tr>
                            </thead>