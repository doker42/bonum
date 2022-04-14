<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
        <div class="card" style="max-width: 100%;">
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img src="{{asset('/img/default.jpg')}}" class="card-img" >
                </div>
                <div class="col-md-10">
                    <div class="card-title text-center">
                       <span style="color: blue">Category:</span>  {{$item->category->name}}
                    </div>
                    <div class="card-title text-center" >
                       <span style="color: green; font-weight: bold">Title:</span> {{$item->title}}
                    </div>
                    <div class="card-body">
                        {{$item->content}}
                    </div>
                    @if(auth()->user()->id == $item->user_id)
                        <div class="card-body">
                            <a href="{{route('edit_form', ["id" => $item->id])}}" class="btn btn-outline-warning">Edit</a>






                            <form action="{{route('posts_delete') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="text" class="form-control" name="id" value="{{$item->id}}" hidden>
                                <button type="submit" id="delete-task-{{ $item->id }}" class="btn btn-danger" onclick="if( ! confirm('fdsfdsf')){return false;}">
                                    <i class="fa fa-btn fa-trash"></i>Delete
                                </button>
                            </form>



                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1"></div>











</div>
<br>
