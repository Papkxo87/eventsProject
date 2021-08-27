<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Main" ? " active" : "" ?>" href="?">Welcome!</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Events" ? " active" : "" ?>"
           href="?type=events&action=show">UPCOMING EVENTS</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Comments" ? " active" : "" ?>"
           href="?type=comments&action=show">Comments</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Likes" ? " active" : "" ?>"
           href="?type=likes&action=show">"Likes"</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Users" ? " active" : "" ?>"
           href="?type=Users&action=show">Users</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "UserGroups" ? " active" : "" ?>"
           href="?type=UserGroups&action=show">UserGroups</a>
        <a class="py-2 d-none d-md-inline-block" href="?type=Aut&action=logout">Выйти
            (<?= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] : "" ?>)</a>
    </nav>
</header>



