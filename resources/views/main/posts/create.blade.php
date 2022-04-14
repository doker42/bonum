@extends('layouts.basic')

@section('content')

    @include('main.includes.nav')

    @include('main.includes.buttons')

    <div class="container">

        <div class="text-center col-md-12">
            <div class="card card-primary">
                <div class="card-header">

                    <h3 class="card-title">Create Post</h3>
                </div>
                <form action="{{ route("posts_store") }}" method="post">
                    @csrf

                    <div class="card card-body">

                        <div class="mb-3">
                            <select class="form-select" name="category_id" aria-label="Category choose">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-2">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control"  name="title" id="title" placeholder="title">
                        </div>

                        <div class="mb-2">
                            <label for="content" class="form-label">Content</label>
                            <textarea class="form-control" name="content" id="content" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <button class="btn btn-primary" type="submit">Create</button>
                        </div>



                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
