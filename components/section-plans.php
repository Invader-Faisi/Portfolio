<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
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

<script>
    $(document).ready(function(){
        let portfolio = '';
        $(document).on('click', '.select-portfolio', function(event) {
            event.preventDefault();
            event.stopPropagation();
            portfolio = $(this).attr('data-id');
            $.ajax({
                type: "POST",
                url: "backend/dbHandler.php",
                dataType: 'json',
                data: { portfolio: portfolio, action:'addPorfolio' },
                success: function(response) {
                    if(response.message){
                        toastr.success('Portfolio added successfully');
                    }

                },
                error: function(xhr, status, error) {
                    toastr.error('Database error : ' + error);
                }
            });
        });
    });
</script>