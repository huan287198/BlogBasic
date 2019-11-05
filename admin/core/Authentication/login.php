<?php


?>
<body class="off-canvas-sidebar">
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
        <div class="container">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="<?php echo '?route=login' ?>">Login Page</a>
            </div>
            <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    aria-controls="navigation-index"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
            >
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="navbar-nav">
                    <li class="nav-item ">
                        <a href="<?php echo '?route=register'; ?>" class="nav-link">
                            <i class="material-icons">person_add</i> Register
                        </a>
                    </li>
                    <li class="nav-item  active ">
                        <a href="login.html" class="nav-link">
                            <i class="material-icons">fingerprint</i> Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black"
         style="background-image: url('<?php echo(HOME_URL . "/admin/assets/img/login.jpg") ?>'); background-size: cover;
                 background-position: top center;">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                    <form class="form" method="POST" action="<?php echo "?route=login" ?>" id="LoginValidation" onsubmit="return myFunction(event);">
                        <div class="card card-login card-hidden">
                            <div class="card-header card-header-rose text-center">
                                <h4 class="card-title">Login</h4>
                                <div class="social-line">
                                    <a href="#" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <p class="card-description text-center">Or Be Classical</p>
                                <div class="form-group">
                                    <label for="exampleEmails" class="bmd-label-floating"> User Name *</label>
                                    <input type="text" class="form-control" id="userName" required="true" name="username">
                                </div>
                                <div class="form-group">
                                    <label for="examplePasswords" class="bmd-label-floating"> Password *</label>
                                    <input type="password" class="form-control" id="examplePasswords" required="true" name="password">
                                </div>
                            </div>
                            <div class="card-footer ml-auto mr-auto">
                                <button type="submit" class="btn btn-rose" name="login">Login</button>
                            </div>



                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="#">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>
    </div>
        <script>
            function myFunction(e) {
                console.log('123123');
                e.preventDefault();
            }
        </script>
</body>
