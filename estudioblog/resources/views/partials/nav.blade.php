<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="{{ route('inicio') }}">
            Blog
        </a>

        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">Login</a>
            </li>
        @endguest


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarBlog">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarBlog">
            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('inicio') }}">
                        Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.create') }}">
                        Nuevo post
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('posts.index') }}">
                        Listado de posts
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>
