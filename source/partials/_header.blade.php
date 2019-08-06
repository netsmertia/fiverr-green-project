<nav class="navbar navbar-expand-lg navbar-light primary-nav fixed-top">
    <div class="container-fluid">


        <a class="navbar-brand" href="#">
            <img src="/assets/images/logo.png" alt="" style="width:auto; height: 72px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item {{ $page->selected('') }}">
                    <a class="nav-link" href="/">INICIO<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown 
                    {{ $page->selected("/volunteer,/organization,/supporter") }}
                ">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        COMO FUNCIONA
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item {{ $page->selected('/volunteer') }}" href="/volunteer">VOLUNTARIOS</a>
                        <a class="dropdown-item {{ $page->selected('/organization') }}" href="/organization">ORGANIZACIONES</a>
                        <a class="dropdown-item {{ $page->selected('/supporter') }}" href="/supporter">SUPPORTERS</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">REPOSITORIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">MI COMUNIDAD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">SOBRE NEEDME</a>
                </li>
            </ul>
        </div>

    </div>
</nav>