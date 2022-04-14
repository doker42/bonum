<div class="text-center">
    <a href="{{route('main')}}" class="btn btn-outline-success">Go to main page</a>
    <a href="{{route('categories')}}" class="btn btn-outline-success">Go categories</a>
    @auth
        @if(Auth()->user()->role_id != 3)
            <a href="{{route('posts_create')}}" class="btn btn-outline-success">Add post</a>
        @endif
    @endif
</div>
