<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Personel Profile</h5>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10 d-flex flex-column align-items-center justify-content-center">

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Update your Profile</h5>
                                    <p class="text-center small">Update your personal details or Change your Plan</p>
                                </div>

                                <form class="row g-3" id="update_form">
                                    <div class="col-12">
                                        <label for="name" class="form-label">Your Name</label>
                                        <input type="text" name="name" class="form-control" id="name" required>
                                        <div class="invalid-feedback">Please, enter your name!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="email" class="form-label">Your Email</label>
                                        <input type="email" name="email" class="form-control" id="email" required>
                                        <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                                    </div>
                                    <div class="col-12">
                                        <label class="col-sm-2 col-form-label">Plan</label>
                                        <div class="col-sm-12">
                                            <select class="form-select" aria-label="Default select example" id="plan" name="plan" required>
                                                <option value="">Upgrade your Plan</option>
                                                <option value="basic">Basic</option>
                                                <option value="silver">Silver</option>
                                                <option value="gold">Gold</option>
                                            </select>
                                        </div>
                                        <div class="invalid-feedback">Please choose a Plan!</div>
                                    </div>

                                    <div class="col-12">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="text" name="username" class="form-control" id="username" required>
                                        <div class="invalid-feedback">Please choose a username.</div>

                                    </div>

                                    <div class="col-12">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password" class="form-control" id="password">
                                        <div class="invalid-feedback">Please enter your password!</div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Pricing -->
    <div class="modal fade" id="pricingModal" tabindex="-1" aria-labelledby="pricingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pricingModalLabel">Plan Pricing</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="alert alert-info">You have to pay the undermentioned amount for this plan !!!</p>
                    <p id="pricingDetails" class="text-success fw-bold"></p>
                    <p class="alert alert-primary">Are you agree to Pay.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="confirmPlanChange">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var initialPlan;
        var confirmedPlan;

        loadPage();

        $('#plan').on('change', function() {
            var newPlan = $(this).val();
            if (newPlan !== confirmedPlan) {
                initialPlan = confirmedPlan;
                var pricingDetails = getPricingDetails(newPlan);
                $('#pricingDetails').text(pricingDetails);
                $('#pricingModal').modal('show');
            }
        });

        $('#confirmPlanChange').on('click', function() {
            confirmedPlan = $('#plan').val();
            $('#pricingModal').modal('hide');
        });

        $('#pricingModal').on('hidden.bs.modal', function() {
            if ($('#plan').val() !== confirmedPlan) {
                $('#plan').val(confirmedPlan).trigger('change');
            }
        });

        $('#update_form').on('submit', function(e) {
            e.preventDefault();

            var formData = {
                action: 'updateProfile',
                name: $('#name').val(),
                email: $('#email').val(),
                plan: $('#plan').val(),
                username: $('#username').val(),
                password: $('#password').val()
            };
            $.ajax({
                type: 'POST',
                url: 'backend/dbHandler.php',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    if (response.message === true) {
                        toastr.success('Portfolio Updated successfully');
                        setTimeout(function() {
                            window.location.replace("http://localhost/portfolio/");
                        }, 3000);
                    } else {
                        toastr.error('Error: ' + response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log('Error: ' + error);
                    alert('There was an error processing your request.');
                }
            });
        });

        function loadPage() {
            $.ajax({
                type: "GET",
                url: "backend/dbHandler.php",
                dataType: 'json',
                data: {
                    action: 'getPrograms'
                },
                success: function(data) {
                    if (data.message === 'success') {
                        $('#name').val(data.programs.name);
                        $('#email').val(data.programs.email);
                        $('#username').val(data.programs.username);

                        $('#plan option').each(function() {
                            if ($(this).val() === data.programs.plan.toLowerCase()) {
                                $(this).prop('selected', true);
                                confirmedPlan = $(this).val();
                            }
                        });
                        $('#plan').trigger('change');
                    } else {
                        alert(data.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.log("Error: " + error);
                    alert("There was an error processing your request.");
                }
            });
        }

        function getPricingDetails(plan) {
            switch (plan) {
                case 'basic':
                    return "Basic Plan: $1000/month";
                case 'silver':
                    return "Silver Plan: $3000/month";
                case 'gold':
                    return "Gold Plan: $5000/month";
                default:
                    return "Please select a plan.";
            }
        }
    });
</script>