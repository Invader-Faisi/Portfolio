<div class="row" id="my_portfolio">


</div>

<script>
    $(document).ready(function (){
        $.ajax({
            type: "POST",
            url: "backend/dbHandler.php",
            dataType: 'json',
            data: {action: 'getMyPortfolios'},
            success: function(response) {
                if(response.message === 'success'){
                    $('#my_portfolio').html(response.portfolio);

                    let buttons = `
<div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="d-flex align-items-center justify-content-start mt-3 gap-2 buttons_div">
                    <a href="portfolios/${response.user_portfolio}?user_id=${response.user_id}" target="_blank" class="btn btn-secondary" data-user="${response.user_id}" onmouseover="this.style.background = 'green'; this.style.color = 'white';" onmouseout="this.style.background = 'white'; this.style.color = 'gray';"><i class="bi bi-eye-fill"></i>&nbsp; <span>View</span></a>
                    <a href="pdf/?user_id=${response.user_id}" target="_blank" class="btn btn-secondary" onmouseover="this.style.background = 'green'; this.style.color = 'white';" onmouseout="this.style.background = 'white'; this.style.color = 'gray';"><i class="bi bi-arrow-bar-down"></i>&nbsp; <span>Download</span></a>
                    </div>
</div>
                    `;

                    $('#my_portfolio').append(buttons);
                } else {
                    toastr.error('You don\'t have any portfolio in the database!');
                }
            },
            error: function(xhr, status, error) {
                toastr.error('Database error: ' + error);
            }
        });
    });


</script>