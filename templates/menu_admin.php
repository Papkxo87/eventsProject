<!--Оформляем меню администратора-->
<header class="site-header sticky-top py-2">
    <nav class="container d-flex flex-column flex-md-row justify-content-between fw-bold">
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Main" ? " active" : "" ?>" href="?">WELCOME!</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Events" ? " active" : "" ?>"
           href="?type=events&action=show">UPCOMING EVENTS</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Comments" ? " active" : "" ?>"
           href="?type=comments&action=show">COMMENTS</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Likes" ? " active" : "" ?>"
           href="?type=likes&action=show">"LIKES"</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Users" ? " active" : "" ?>"
           href="?type=Users&action=show">USERS</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "UserGroups" ? " active" : "" ?>"
           href="?type=UserGroups&action=show">UserGroups</a>
        <a class="py-2 d-none d-md-inline-block" href="?type=Aut&action=logout">SIGN OUT
            (<?= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] : "" ?>)</a>
        <a class="py-2 d-none d-md-inline-block" href="">😎</a>
    </nav>
</header>



