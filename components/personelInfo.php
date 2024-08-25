<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Personel Information</h5>

            <!-- Personel Information -->
            <form id="personal_info_form" enctype="multipart/form-data">
                <div class="row mb-3">
                    <label for="selected_portfolio" class="col-sm-2 col-form-label">Portfolio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php if(isset($_SESSION['portfolio'])){echo $_SESSION['portfolio'];} ?>" id="selected_portfolio" name="selected_portfolio" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="user_profession" class="col-sm-2 col-form-label">Profession</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_profession" name="user_profession" placeholder="Enter your profession ...">
                    </div>
                    <div id="user_profession_error"></div>
                </div>

                <div class="row mb-3">
                    <label for="user_name" class="col-sm-2 col-form-label">Your Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter your name ...">
                    </div>
                    <div id="user_name_error"></div>
                </div>
                <div class="row mb-3">
                    <label for="user_email" class="col-sm-2 col-form-label">Your Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter your email ...">
                    </div>
                    <div id="user_email_error"></div>
                </div>
                <div class="row mb-3">
                    <label for="user_dob" class="col-sm-2 col-form-label">DOB</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" id="user_dob" name="user_dob">
                    </div>

                    <label for="user_age" class="col-sm-1 col-form-label">Age</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" min="15" id="user_age" name="user_age">
                    </div>
                    <div id="user_dob_error"></div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_gender" id="user_gender" value="male" checked>
                            <label class="form-check-label" for="user_gender">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_gender" id="user_gender" value="female">
                            <label class="form-check-label" for="user_gender">
                                Female
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="user_img" class="col-sm-2 col-form-label">Upload Image</label>
                    <div class="col-sm-10">
                        <input type="file" id="user_img" name="user_img" accept="image/*" class="form-control">
                    </div>
                    <div id="user_img_error"></div>
                </div>
                <div class="row mb-3">
                    <label for="user_social_fb" class="col-sm-2 col-form-label">Social media's</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="user_social_fb" name="user_social_fb" placeholder="Facebook address ...">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="user_social_tw" name="user_social_tw" placeholder="Twitter address ...">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="user_social_in" name="user_social_in" placeholder="Instagram address ...">
                    </div class="col-sm-4">
                    <div id="user_social_error"></div>
                </div>
                <div class="row mb-3">
                    <label for="user_address" class="col-sm-2 col-form-label">Your Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_address" name="user_address" placeholder="Enter your address ...">
                    </div>
                    <div id="user_address_error"></div>
                </div>
                <div class="row mb-3">
                    <label for="user_cell" class="col-sm-2 col-form-label">Your Cell No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_cell" name="user_cell" placeholder="Enter your mobile number ...">
                    </div>
                    <div id="user_cell_error"></div>
                </div>
                <div class="row mb-3">
                    <label for="preview_btn" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10 d-flex align-content-center justify-content-around">
                      <button type="submit" class="btn btn-primary" id="add_info">Add Info</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>
    </div>

</div>

<script>
    $(document).ready(function() {

        $('#personal_info_form').on('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(this);
            let isValid = true;

            //Validate the fields

            let user_profession = $('#user_profession').val().trim();
            if (user_profession === '') {
                isValid = false;
                $('#user_profession_error').append('<p class="alert alert-danger">Please enter your Profession.</p>');
            }

            let user_name = $('#user_name').val().trim();
            if (user_name === '') {
                isValid = false;
                $('#user_name_error').append('<p class="alert alert-danger">Please enter your Full name.</p>');
            }

            let user_email = $('#user_email').val().trim();
            if (user_email === '') {
                isValid = false;
                $('#user_email_error').append('<p class="alert alert-danger">Please enter your Email.</p>');
            }

            let user_dob = $('#user_dob').val().trim();
            if (user_dob === '') {
                isValid = false;
                $('#user_dob_error').append('<p class="alert alert-danger">Please enter your Date of Birth.</p>');
            }

            let user_age = $('#user_age').val().trim();
            if (user_age === '') {
                isValid = false;
                $('#user_dob_error').append('<p class="alert alert-danger">Please enter your Age.</p>');
            }

            let user_img = $('#user_img').val().trim();
            if (user_img === '') {
                isValid = false;
                $('#user_img_error').append('<p class="alert alert-danger">Please add your Image.</p>');
            }

            let user_social_fb = $('#user_social_fb').val().trim();
            if (user_social_fb === '') {
                isValid = false;
                $('#user_social_error').append('<p class="alert alert-danger">Please add at least Facebook ID.</p>');
            }

            let user_address = $('#user_address').val().trim();
            if (user_address === '') {
                isValid = false;
                $('#user_address_error').append('<p class="alert alert-danger">Please add your Address.</p>');
            }

            let user_cell = $('#user_cell').val().trim();
            if (user_cell === '') {
                isValid = false;
                $('#user_cell_error').append('<p class="alert alert-danger">Please add your Cell Number.</p>');
            }


            // If form is valid, get the data
            if (isValid) {
                formData.append('action', 'addPersonalInfo');
                $.ajax({
                    type: "POST",
                    url: "backend/dbHandler.php",
                    dataType: 'json',
                    processData: false,
                    contentType: false,
                    data: formData,
                    success: function(response) {
                        if(response.message == 'success'){
                            toastr.success('Portfolio added successfully');
                            $('#personal_info_form')[0].reset();
                        }else{
                            toastr.error('Image Size is too large');
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error('Database error : ' + error);
                    }
                });
            }
        });
    });

</script>