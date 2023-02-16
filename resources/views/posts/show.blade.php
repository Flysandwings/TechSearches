@include('templates.header', ['title' => 'View Post'])
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ $post->title }}</div>
                    <div class="panel-body">
                        <div class="mb-3">Created By: {{ $post->user->name }}</div>
                        <div class="mb-3">Description: {{ $post->description }}</div>
                        <div class="mb-3">Status: {{ $post->closed ? 'Closed' : 'Open' }}</div>
                        <div class="mb-3">Response: {{ $post->response ? $post->response : 'No response' }}</div>
                        
                        <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>