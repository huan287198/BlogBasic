<?php
    if (!hasSession('auth')) {
        redirect('?route=login');
        return;
    }
?>

<div class="wrapper">
    <?php
        require_once "admin/includes/sidebar.php";
    ?>
    <div class="main-panel">
        <?php include_once "admin/includes/nav.php"; ?>
    </div>

</div>
