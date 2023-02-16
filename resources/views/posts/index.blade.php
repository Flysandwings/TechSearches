@include('templates.header', ['title' => 'View Posts', 'color' => 'lightgrey'])

@include('templates.headerDependent')
    <tbody>
    @if($posts instanceof \Illuminate\Database\Eloquent\Collection)
        @foreach($posts as $post)
            @if($post->finder_id !== Auth::id() && session('role') === "finder" || session('role') === "searcher")
            <tr>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                @if($post->closed == 0)
                    <td>Awaiting Response</td>
                @else
                    <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View results</a></td>
                @endif
                <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary mb-3">Edit</button></td>
            </tr>
            @endif
        @endforeach
    @else
        @if($post->finder_id !== Auth::id() && session('role') === "finder" || session('role') === "searcher")
        <tr>
            <td>{{ $posts->title }}</td>
            <td>{{ $posts->description }}</td>
            @if($posts->closed == 0)
                <td>Awaiting Response</td>
            @else
                <td>View results link</td>
            @endif
            <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary mb-3">Edit</button></td>
        </tr>
        @endif
    @endif
    </tbody>
@include('templates.footer')

@if(session('role') === "finder")
    @include('templates.headerPartial', ['title' => 'Completed Jobs', 'color' => 'lightgreen'])
        <tbody>
        @if($posts instanceof \Illuminate\Database\Eloquent\Collection)
            @foreach($posts as $post)
                @if($post->finder_id === Auth::id() && $post->closed == 1)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    @if($post->closed == 0)
                        <td>Awaiting Response</td>
                    @else
                        <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View results</a></td>
                    @endif
                    <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary mb-3">Edit</button></td>
                </tr>
                @endif
            @endforeach
        @else
            @if($post->finder_id === Auth::id() && $post->closed == 1)
            <tr>
                <td>{{ $posts->title }}</td>
                <td>{{ $posts->description }}</td>
                @if($posts->closed == 0)
                    <td>Awaiting Response</td>
                @else
                    <td>View results link</td>
                @endif
                <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary mb-3">Edit</button></td>
            </tr>
            @endif
        @endif
        </tbody>
    @include('templates.footer')

    @include('templates.headerPartial', ['title' => 'In Progress Jobs', 'color' => 'lightyellow'])
        <tbody>
        @if($posts instanceof \Illuminate\Database\Eloquent\Collection)
            @foreach($posts as $post)
                @if($post->finder_id === Auth::id() && $post->closed == 0)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td>
                    @if($post->closed == 0)
                        <td>Awaiting Response</td>
                    @else
                        <td><a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View results</a></td>
                    @endif
                    <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary mb-3">Edit</button></td>
                </tr>
                @endif
            @endforeach
        @else
            @if($post->finder_id === Auth::id() && $post->closed == 0)
            <tr>
                <td>{{ $posts->title }}</td>
                <td>{{ $posts->description }}</td>
                @if($posts->closed == 0)
                    <td>Awaiting Response</td>
                @else
                    <td>View results link</td>
                @endif
                <td><a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary mb-3">Edit</button></td>
            </tr>
            @endif
        @endif
        </tbody>
    @include('templates.footer')
@endif
</body>
</html>