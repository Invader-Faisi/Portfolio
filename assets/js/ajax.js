$(document).ready(function() {
    var section = "plans";
    $('#register_form').on('submit', function(event) {
        event.preventDefault(); 

    $.ajax({
            url: 'backend/dbHandler.php',  
            type: 'POST',
            data: {
                action: 'register', 
                name: $('#name').val(),  
                username: $('#username').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                plan: $('#plan').val()
            },
            dataType: 'json',
            success: function(response) {
                alert(response.message);  
            },
            error: function(xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });

    $('#login_form').on('submit', function(event){
        event.preventDefault();
        $.ajax({
            url: 'backend/dbHandler.php',
            type: 'POST',
            data: {
                action: 'login',       // Specify the action
                username: $('#l_username').val(),
                password: $('#l_password').val()
            },
            dataType: 'json',
            success: function(response) {
                if(response.user === 'user' && response.status === 'Approved'){
                    window.location.replace("http://localhost/portfolio/");
                }else if(response.user === 'user' && response.status === 'Pending'){
                    toastr.success('Your application is pending for approval, Please wait!!');
                    $('#login_form')[0].reset();
                    setTimeout(function() {
                        window.location.replace("http://localhost/portfolio/");
                    }, 4000);
                }else if(response.user === 'admin' && response.status === 'Approved'){
                    window.location.replace("http://localhost/portfolio/admin.php");
                    toastr.success('Welcome ' + response.user);
                }else{
                    toastr.error(response.message);
                    $('#login_form')[0].reset();
                }
            },
            error: function(xhr, status, error) {
                toastr.error('An error occurred: ' + error);
            }
        });

    });

    $('#logout').click(function(){
        $.ajax({
            url: 'backend/dbHandler.php',
            type: 'POST',
            data: {
                action: 'logout',       // Specify the action
            },
            dataType: 'json',
            success: function(response) {
                if(response.message === 'success'){
                    window.location.reload();
                }else{
                    alert('something went wrong');
                } 
            },
            error: function(xhr, status, error) {
                alert('An error occurred: ' + error);
            }
        });
    });

    var page = $('#portfolio');
    if(page.length){
        loadPages(section);
    }

    $('#sidebar-nav .nav-link').click(function(event){
        event.preventDefault();
        var page = $(this).attr('data-id');
        loadPages(page);
    });

    function loadPages(section){
        switch(section){
            case 'plans':
            $.ajax({
                    url: 'components/section-plans.php',  // The file to load dynamically
                    type: 'GET',
                    success: function(response) {
                        // Inject the dashboard content into the #content div
                        $('#portfolio').empty();
                        $('#portfolio').html(response);

                        $('#portfolio').show();
                    },
                    error: function(xhr, status, error) {
                        alert('Failed to load Plans: ' + error);
                    }
                });
                break;
            case 'personelInfo':
                $.ajax({
                    url: 'components/personelInfo.php',  // The file to load dynamically
                    type: 'GET',
                    success: function(response) {
                        // Inject the dashboard content into the #content div
                        $('#portfolio').empty();
                        $('#portfolio').html(response);

                        $('#portfolio').show();
                    },
                    error: function(xhr, status, error) {
                        alert('Failed to load Plans: ' + error);
                    }
                });
                break;
            case 'about':
                $.ajax({
                    url: 'components/about.php',  // The file to load dynamically
                    type: 'GET',
                    success: function(response) {
                        // Inject the dashboard content into the #content div
                        $('#portfolio').empty();
                        $('#portfolio').html(response);

                        $('#portfolio').show();
                    },
                    error: function(xhr, status, error) {
                        alert('Failed to load Plans: ' + error);
                    }
                });
                break;
            case 'myPortfolios':
                $.ajax({
                    url: 'components/myPortfolios.php',  // The file to load dynamically
                    type: 'GET',
                    success: function(response) {
                        // Inject the dashboard content into the #content div
                        $('#portfolio').empty();
                        $('#portfolio').html(response);

                        $('#portfolio').show();
                    },
                    error: function(xhr, status, error) {
                        alert('Failed to load Plans: ' + error);
                    }
                });
                break;
        }
    }
});

