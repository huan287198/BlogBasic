<?php
include_once "admin/helper/auth.php";
$show= "";
if (isset($_POST["register"])) {
    $user =  $_POST["user_register"];
    $email =  $_POST["email_register"];
    $pass =  $_POST["password_register"];


    if (registerAccount($user, $email, $pass) == "1") {
        addSession("auth", md5($pass));
        redirect("?route=admin");
    } else {
        $show = "show";
    }
}

?>

<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="<?php echo '?route=register' ?>">Register Page</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item  active ">
                    <a href="<?php echo '?route=register' ?>" class="nav-link">
                        <i class="material-icons">person_add</i> Register
                    </a>
                </li>
                <li class="nav-item ">
                    <a href="<?php echo '?route=login' ?>" class="nav-link">
                        <i class="material-icons">fingerprint</i> Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="wrapper wrapper-full-page">
    <div class="page-header register-page header-filter" filter-color="black"
         style="background-image: url('<?php echo(HOME_URL . "admin/assets/img/register.jpg") ?>')">
        <div class="container">
            <div class="row">
                <div class="col-md-10 ml-auto mr-auto">
                    <div class="card card-signup">
                        <h2 class="card-title text-center">Register</h2>
                        <div class="card-body">
                            <div class="alert alert-danger alert-dismissible fade <?php echo($show); ?> " role="alert" >
                                <strong>Register failed!</strong> Your email or username is already yet!!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-md-5 ml-auto">
                                    <div class="info info-horizontal">
                                        <div class="icon icon-rose">
                                            <i class="material-icons">timeline</i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Marketing</h4>
                                            <p class="description">
                                                We've created the marketing campaign of the website. It was a very
                                                interesting collaboration.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info info-horizontal">
                                        <div class="icon icon-primary">
                                            <i class="material-icons">code</i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Fully Coded in HTML5</h4>
                                            <p class="description">
                                                We've developed the website with HTML5 and CSS3. The client has access
                                                to the code using GitHub.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="info info-horizontal">
                                        <div class="icon icon-info">
                                            <i class="material-icons">group</i>
                                        </div>
                                        <div class="description">
                                            <h4 class="info-title">Built Audience</h4>
                                            <p class="description">
                                                There is also a Fully Customizable CMS Admin Dashboard for this product.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5 mr-auto">
                                    <div class="social text-center">
                                        <button class="btn btn-just-icon btn-round btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                        </button>
                                        <button class="btn btn-just-icon btn-round btn-dribbble">
                                            <i class="fa fa-dribbble"></i>
                                        </button>
                                        <button class="btn btn-just-icon btn-round btn-facebook">
                                            <i class="fa fa-facebook"> </i>
                                        </button>
                                        <h4 class="mt-3"> or be classical </h4>
                                    </div>
                                    <form
                                            class="form"
                                            method="POST"
                                            action="<?php echo '?route=register' ?>"
                                            id="RegisterForm"
                                    >
                                        <div class="form-group ">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <i class="material-icons">face</i>
                                                    </span>
                                                </div>
                                                <input type="text" class="form-control" id="userName" required="true"
                                                       name="user_register" placeholder="User Name..."
                                                >

                                            </div>
                                        </div>
                                        <div class="form-group has-default">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <i class="material-icons">mail</i>
                                                    </span>
                                                </div>
                                                <input
                                                        type="text"
                                                        class="form-control"
                                                        name="email_register"
                                                        placeholder="Email..."
                                                        required="true"
                                                        email="true"
                                                />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">
                                                      <i class="material-icons">lock_outline</i>
                                                    </span>
                                                </div>
                                                <input
                                                        type="password"
                                                        name="password_register"
                                                        placeholder="Password..."
                                                        class="form-control"
                                                        required="true"

                                                />
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked=""/>
                                                <span class="form-check-sign">
                                                    <span class="check"></span>
                                                  </span>
                                                I agree to the terms and conditions
                                            </label>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-round mt-4"
                                                    name="register">Register
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <nav class="float-left">
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="https://creative-tim.com/presentation">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                        <li>
                            <a href="https://www.creative-tim.com/license">
                                Licenses
                            </a>
                        </li>
                    </ul>
                </nav>

            </div>
        </footer>
    </div>
</div>
<script>
    function myFunction(e) {
        e.preventDefault();
    }
</script>

