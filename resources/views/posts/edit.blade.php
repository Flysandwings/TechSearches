@include('templates.header', ['title' => 'Edit Post'])
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Your Post</div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('posts.update', $post->id) }}">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" id="description" name="description">{{ old('description', $post->description) }}</textarea>
                                @error('description')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            @if(isset(Auth::user()->role_id) && session('role') === "finder")
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="closed" name="closed" {{ old('closed', $post->closed) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="closed">Closed</label>
                                </div>
                                <div class="mb-3">
                                    <label for="response" class="form-label">Response</label>
                                    <textarea class="form-control" id="response" name="response">{{ old('response', $post->response) }}</textarea>
                                    @error('description')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            @endif
                            <br>
                            <button type="submit" class="btn btn-primary m2">Submit</button>
                            <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>