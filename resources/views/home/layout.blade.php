<!doctype html>
<html lang="en">
<head>
    <title>Baimless.live - @yield("title", "Home")</title>
    <link type="text/css" rel="stylesheet" href="{{ asset("css/app.css") }}">
    @stack("custom_css")
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
            <a class="navbar-brand mr-auto mr-lg-0" href="#">Baimless.live - @yield("title", "Home")</a>
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse offcanvas-collapse">
                <ul class="navbar-nav mr-5"></ul>

                <ul class="navbar-nav">
                    <li class="nav-item {{ (strpos(Route::currentRouteName(), 'Index') === 0) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('Index') }}">Index</a>
                    </li>
                    <li class="nav-item {{ (strpos(Route::currentRouteName(), 'List') === 0) ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('List') }}">List</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main class="container">
            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
                <img class="mr-3" src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-outline.svg" alt="" width="48" height="48">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">Baimless.live</h6>
                    <small>Since 2020</small>
                </div>
            </div>

            @section("main")
            @show
        </main>
    </div>
    <script src="{{ asset("js/app.js") }}"></script>
    @stack("custom_js")
</body>
</html>
