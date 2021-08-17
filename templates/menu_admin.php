<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Carousel</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link<?= $this->data['controllerName'] == "Main" ? " active" : "" ?>" href="?">Home
                        <span
                                class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $this->data['controllerName'] == "Events" ? " active" : "" ?>"
                       href="?type=events&action=show">UPCOMING EVENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $this->data['controllerName'] == "Comments" ? " active" : "" ?>"
                       href="?type=comments&action=show">Comments</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $this->data['controllerName'] == "Likes" ? " active" : "" ?>"
                       href="?type=likes&action=show">"Likes"</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $this->data['controllerName'] == "Users" ? " active" : "" ?>"
                       href="?type=Users&action=show">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?= $this->data['controllerName'] == "UserGroups" ? " active" : "" ?>"
                       href="?type=UserGroups&action=show">UserGroups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?type=Aut&action=logout">Выйти
                        (<?= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] : "" ?>)</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>



