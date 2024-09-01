<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Portfolios for <?php echo $_SESSION['plan'];?> Plan</h5>
    <div class="row">
        <?php
        if($_SESSION['plan'] == 'Basic'){
            include 'plans/iportfolio.php';
        }else if ($_SESSION['plan'] == 'Silver'){
            include 'plans/iportfolio.php';
            include 'plans/myresume.php';
            include 'plans/kfolio.php';
        }else if ($_SESSION['plan'] == 'Gold'){
            include 'plans/iportfolio.php';
            include 'plans/myresume.php';
            include 'plans/kfolio.php';
            include 'plans/laurafolio.php';
            include 'plans/devfolio.php';
        }
        ?>
    </div>
    </div>
    </div>
</div>