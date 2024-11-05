<nav class="app-header navbar navbar-expand bg-body"> <!--begin::Container-->
    <div class="container-fluid"> <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
            <li class="nav-item d-none d-md-block"> <a href="/" class="nav-link">Home</a> </li>
        </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    {{-- <img src="{{asset('backend/assets/img/user2-160x160.jpg')}}" class="user-image rounded-circle shadow" alt="User Image"> --}}
                    <i class="bi bi-person-workspace"></i>
                    <span class="d-none d-md-inline">
                        {{Auth::user()->name}}
                    </span>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit()" class="btn btn-flat float-end dropdown-item">
                            <i class="bi bi-box-arrow-up-left"></i>
                            Logout
                        </a>
                        <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div> <!--end::Container-->
</nav>
