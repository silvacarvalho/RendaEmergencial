<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
        <a href="#" class="navbar-brand"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Alterna Navegação">
            INFO SOCIAL
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navBar">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a href="{{ route('home') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('s-index') }}" class="nav-link">Servidores</a>
                </li>
                <li class="nav-item active">
                    <a href="{{ route('f-index') }}" class="nav-link">Famílias</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
