<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset("img/apple-icon.png") }}">
    <link rel="icon" type="image/png" href="{{ asset("img/favicon.png") }}">

    <title>Baimless.live Dashboard</title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset("css/nucleo-icons.css") }}">
    <link type="text/css" rel="stylesheet" href="{{ asset("css/black-dashboard.css") }}?v=1.0.0">

    @stack("custom_css")
</head>
<body>
<div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white">
        <div class="logo">
            <a href="{{ URL::to("/") }}" class="simple-text logo-mini">
                BL
            </a>

            <a href="{{ URL::to("/") }}" class="simple-text logo-normal">
                Baimless.live
            </a>
        </div>

        <div class="sidebar-wrapper">
            <ul class="nav">
                @stack("menuItems")
            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="#">@yield("title", "Home")</a>
                </div>

                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="tim-icons"></i> Welcome stranger
                            </a>
                        </li>
                        <!-- your navbar here -->
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="container-fluid">
                @section("main")
                @show
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, made with <i class="tim-icons icon-heart-2"></i>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="{{ asset("js/dashboard.js") }}"></script>

</body>
</html>
