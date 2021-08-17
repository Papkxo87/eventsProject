<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Events for you</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01"
                aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item active">
                    <a class="nav-link<?= $this->data['controllerName'] == "Main" ? " active" : "" ?>" href="?">Home <span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $this->data['controllerName'] == "Showevents" ? " active" : "" ?>"
                       href="?type=Showevents&action=show">UPCOMING EVENTS</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link<?= $this->data['controllerName'] == "Aut" ? " active" : "" ?>"
                       href="?type=Aut&action=show">Войти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $this->data['controllerName'] == "Aut" ? " active" : "" ?>"
                       href="?type=Aut&action=showreg">Регистрация</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-bs-toggle="dropdown"
                       aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown01">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
