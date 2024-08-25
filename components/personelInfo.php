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
            <form action="portfolios/<?php echo $_SESSION['portfolio']; ?>/index.php">
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Portfolio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="<?php echo $_SESSION['portfolio']; ?>" id="selected_portfolio" name="selected_portfolio" readonly>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Profession</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_profession" name="user_profession" placeholder="Enter your profession ...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Your Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Enter your name ...">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Your Email</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="user_email" name="user_email" placeholder="Enter your email ...">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputDate" class="col-sm-2 col-form-label">DOB</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" id="user_dob" name="user_dob">
                    </div>

                    <label for="inputDate" class="col-sm-1 col-form-label">Age</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" min="15" id="user_age" name="user_age">
                    </div>
                </div>
                <fieldset class="row mb-3">
                    <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                    <div class="col-sm-10">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_gender" id="user_gender" value="male" checked>
                            <label class="form-check-label" for="gridRadios1">
                                Male
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="user_gender" id="user_gender" value="female">
                            <label class="form-check-label" for="gridRadios2">
                                Female
                            </label>
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                    <label for="inputNumber" class="col-sm-2 col-form-label">Upload Image</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="user_img" name="user_img">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Social media's</label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="user_social_fb" name="user_social_fb" placeholder="Facebook address ...">
                    </div>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" id="user_social_tw" name="user_social_tw" placeholder="Twitter address ...">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="user_social_in" name="user_social_in" placeholder="Instagram address ...">
                    </div class="col-sm-4">
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Your Address</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_address" name="user_address" placeholder="Enter your address ...">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Your Cell No</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_cell" name="user_cell" placeholder="Enter your mobile number ...">
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10 d-flex align-content-center justify-content-around">
                        <button type="submit" class="btn btn-secondary" name="preview" value="Preview">Preview</button>
                        <button type="button" class="btn btn-primary">Add Info</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>
    </div>

</div>