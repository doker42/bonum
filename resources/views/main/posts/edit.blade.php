
@extends('layouts.basic')

@section('content')

    @include('main.includes.nav')

    @include('main.includes.buttons')





    <div class="container">
        <h2>Edit post</h2>
        <form action="{{ route("posts_update") }}" method="post">
            @csrf
            <div class="mb-3">
                <select class="form-select" name="category_id" aria-label="Category choose">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Content</label>
                <textarea class="form-control" id="content" name="content" rows="3">{{$post->content}}</textarea>
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="id" value="{{$post->id}}" hidden>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary" type="submit">Edit</button>
            </div>
        </form>

    </div>


@endsection
