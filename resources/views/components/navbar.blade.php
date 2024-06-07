<div>
   <!-- Navigation-->
   <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container px-5">
        <a class="navbar-brand" href="{{route('homepage')}}">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{route('homepage')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
                <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="pricing.html">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="faq.html">FAQ</a></li>
                
                @auth()
                <li class="nav-item">
                    <a class="nav-link" href="{{route('dashboard')}}"><span class="material-symbols-outlined">team_dashboard</span></a>
                </li>
                <form class="" action="{{route('logout')}}" method="POST">
                    @csrf
                    <li class="nav-item">
                        <button class="btn btn-sm text-danger nav-link" type="submit"><span class="material-symbols-outlined">logout</span></button>
                    </li>
                </form>
                <li class="nav-item">
                    <img src="{{Auth::user()->user_image}}" class="img-fluid rounded nav-link" style="width: 50px" alt="">
                </li>
                @else
                <li class="nav-item"><a class="btn btn-sm btn-outline-dark m-auto" href="{{route('login')}}">Login</a></li>
                <li class="nav-item"><a class="btn btn-sm btn-outline-dark m-auto" href="{{route('register')}}">Register</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><span class="material-symbols-outlined">person</span></a></li>
                
                @endauth
            </ul>
        </div>
    </div>
</nav>
</div>