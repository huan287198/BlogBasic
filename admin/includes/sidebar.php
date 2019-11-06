
<?php echo(getSession("login"))  ?>

<div class="sidebar" data-color="purple" data-background-color="black"
     data-image="<?php echo(HOME_URL . "admin/assets/img/sidebar-1.jpg"); ?>">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-mini">
            CT
        </a>
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Creative Tim
        </a>
    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="<?php echo(HOME_URL . "admin/assets/img/faces/avatar.jpg"); ?>"/>
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="dashboard.html#collapseExample" class="username">
              <span>
                Tania Andrew
                <b class="caret"></b>
              </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <span class="sidebar-mini"> MP </span>
                                <span class="sidebar-normal"> My Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="dashboard.html#">
                                <span class="sidebar-mini"> EP </span>
                                <span class="sidebar-normal"> Edit Profile </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo '?route=logout'; ?>">
                                <span class="sidebar-mini"> LO </span>
                                <span class="sidebar-normal"> Logout </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item active ">
                <a class="nav-link" href="dashboard.html">
                    <i class="material-icons">dashboard</i>
                    <p> Dashboard </p>
                </a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="dashboard.html#pagesExamples">
                    <i class="material-icons">image</i>
                    <p> Category
                    </p>
                </a>

            </li>
            <li class="nav-item ">
                <a class="nav-link" data-toggle="collapse" href="dashboard.html#componentsExamples">
                    <i class="material-icons">apps</i>
                    <p> Posts </p>
                </a>
            </li>
        </ul>
    </div>
</div>
