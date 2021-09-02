<!--Оформляем меню незарегестрированного гостя-->
<header class="site-header sticky-top py-1">
    <nav class="container d-flex flex-column flex-md-row justify-content-between">
        <span class="input-group-text" id="basic-addon1">👉🏼EVENTS FOR YOU</span>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Main" ? " active" : "" ?>" href="?">WELCOME!</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Showevents" ? " active" : "" ?>"
           href="?type=Showevents&action=show">UPCOMING EVENTS</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Aut" ? " active" : "" ?>"
           href="?type=Aut&action=show">LOG IN</a>
        <a class="py-2 d-none d-md-inline-block<?= $this->data['controllerName'] == "Aut" ? " active" : "" ?>"
           href="?type=Aut&action=showreg">SIGN IN</a>
    </nav>
</header>
