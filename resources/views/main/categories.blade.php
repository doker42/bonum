@extends('layouts.basic')

@section('content')
    @include('main.includes.nav')

    <div class="container">
        @include('main.includes.buttons')
        <div class="text-center">
            <h3>CHOOSE CATEGORY</h3>
        </div>

        <div class="container cat">
            @if(count($categories) > 0)
                <ul>
                    @foreach($categories as $category)
                        @if($category->parent_id == 0)
                        <li><a class="" href="{{route('categories.posts', $category)}}">{{$category->name}}</a></li>
                        <ul>
                            @foreach($category->child as $el)
{{--                                @if($el->status ==1)--}}
                                    <li><a class="" href="{{route('categories.posts', $el)}}">{{$el->name}}</a></li>

{{--                                @endif--}}
                            @endforeach
                        </ul>
                        @endif
                    @endforeach

                </ul>
            @else
                <div class="text-center">
                    <h5>NO CATEGORIES</h5>
                </div>
            @endif
        </div>
    </div>
@endsection
