<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" style="color: goldenrod;"  href="/"> Japan Auto </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/manufacturers">Manufacturers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">Cars</a>
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link text-warning" href="/login">Login</a>
                    </li>
                @endguest
                @auth
                    <form class="nav-item mb-0" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="nav-link text-warning" type="submit">Logout</button>
                    </form>
                @endauth
            </ul>
        </div>
    </div>
</nav>