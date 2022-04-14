<nav class="navbar navbar-expand-lg navbar-light bg-light">

        <a class="navbar-brand" href="#">Bonum</a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            @auth
{{--                @dd(auth()->user())--}}
                <div> You have {{Auth::user()->role->name }} status </div>


                @if(Auth::user()->role_id == 1 )
                    <a class="btn btn-primary" href="{{ route('main') }}" > Admin panel</a>
                @endif
                <span class="marg-l-20"> {{ Auth::user()->name }}</span>
                <a class="btn btn-secondary marg-1-20" href="{{route('main')}}">Profile</a>

                <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <x-jet-responsive-nav-link href="{{route('logout')}}"
                                               onclick="event.preventDefault();
                                               this.closest('form').submit();">
                       Logout
                    </x-jet-responsive-nav-link>
                </form>
                @else
                <a href="{{route('login')}}" class="marg-l-10">Login</a>

                <a href="{{route('register')}}" class="marg-l-10">Register</a>
                @endif
        </div>
</nav>
