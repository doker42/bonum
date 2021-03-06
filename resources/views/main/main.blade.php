@extends('layouts.basic')

@section('content')

    @include('main.includes.nav')

    @include('main.includes.buttons')

    <div class="container">
        <div class="text-center">
            <h3>POSTS</h3>
        </div>
        <div class="container">
            @if(count($posts) > 0)

                @foreach($posts as $item)
                    @include('main.includes.posts')
                @endforeach

                @include('main.includes.pagination')

            @else
                <div class="text-center">
                    <h5>no posts</h5>
                </div>
            @endif

        </div>
    </div>


    @endsection
