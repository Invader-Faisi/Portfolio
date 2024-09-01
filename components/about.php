<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<style>
    /*--------------------------------------------------------------
# Badges and pills
--------------------------------------------------------------*/
    .pills {
        display: flex;
        flex-wrap: wrap;
        gap: 5px;
        max-width: 100%; /* Prevent overflow */
    }

    .badge {
        margin-bottom: 5px;
        background-color: #22f80b;
        color: white;
        padding: 0.5em 0.75em;
        border-radius: 0.5rem;
        display: inline-flex;
        align-items: center;
    }

    .badge span {
        cursor: pointer;
        margin-left: 0.5em;
        font-weight: bold;
    }
</style>
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Describe about your self</h5>

            <!-- Personel Information -->
            <form id="about_form">
                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />
                <h5 class="text-center fw-bold">Skills & Tools</h5>
                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />

                <div class="row mb-3">
                    <label for="user_skills" class="col-sm-2 col-form-label">Skills</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control pills-input" id="user_skills" name="user_skills" placeholder="Enter comma separated skills...">
                        <div id="skill_pills" class="mt-2 pills pills-container d-flex flex-wrap"></div>
                        <div id="user_skill_error"></div>
                    </div>
                    <label for="user_rate_exp" class="col-sm-1 col-form-label">Rating</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control pills-input" id="user_rate_exp" name="user_rate_exp" placeholder="Skills rating out of 100 comma separated ...">
                        <div id="skill_rate_pills" class="mt-2 pills pills-container"></div>
                        <div id="user_rate_exp_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="user_tools" class="col-sm-2 col-form-label">Tools</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control pills-input" id="user_tools" name="user_tools" placeholder="Enter comma separated tools ...">
                        <div id="tool_pills" class="mt-2 pills pills-container d-flex flex-wrap"></div>
                        <div id="user_tool_error"></div>
                    </div>
                    <label for="user_tool_exp" class="col-sm-1 col-form-label">Rating</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control pills-input" id="user_tool_exp" name="user_tool_exp" placeholder="Tools rating out of 100 comma separated ...">
                        <div id="tool_rate_pills" class="mt-2 pills pills-container"></div>
                        <div id="user_tool_rate_error"></div>
                    </div>
                </div>

                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />
                <h5 class="text-center fw-bold">Education</h5>
                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />

                <div class="row mb-3">
                    <label for="user_metric_subject" class="col-sm-2 col-form-label">Matric</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_metric_subject" name="user_metric_subject" placeholder="Enter Subject...">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="user_metric_marks" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="user_metric_marks" name="user_metric_marks" placeholder="Enter Marks...">
                    </div>
                    <div class="col-sm-2">
                        <input type="number" min="2000" max="2024" step="1" class="form-control" id="user_metric_from" name="user_metric_from" placeholder="From year...">
                    </div>
                    <div class="col-sm-2">
                        <input type="number" min="2000" max="2024" step="1" class="form-control" id="user_metric_to" name="user_metric_to" placeholder="To year...">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="user_metric_institute" name="user_metric_institute" placeholder="Institute...">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="user_inter_subject" class="col-sm-2 col-form-label">Intermediate</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_inter_subject" name="user_inter_subject" placeholder="Enter Subject...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="user_inter_marks" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="user_inter_marks" name="user_inter_marks" placeholder="Enter Marks...">
                    </div>
                    <div class="col-sm-2">
                        <input type="number" min="2000" max="2024" step="1" class="form-control" id="user_inter_from" name="user_inter_from" placeholder="From year...">
                    </div>
                    <div class="col-sm-2">
                        <input type="number" min="2000" max="2024" step="1" class="form-control" id="user_inter_to" name="user_inter_to" placeholder="To year...">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="user_inter_institute" name="user_inter_institute" placeholder="Institute...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="user_grad_subject" class="col-sm-2 col-form-label">Graduation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_grad_subject" name="user_grad_subject" placeholder="Enter Subject...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="user_grad_marks" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="user_grad_marks" name="user_grad_marks" placeholder="Enter Marks...">
                    </div>
                    <div class="col-sm-2">
                        <input type="number" min="2000" max="2024" step="1" class="form-control" id="user_grad_from" name="user_grad_from" placeholder="From year...">
                    </div>
                    <div class="col-sm-2">
                        <input type="number" min="2000" max="2024" step="1" class="form-control" id="user_grad_to" name="user_grad_to" placeholder="To year...">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="user_grad_institute" name="user_grad_institute" placeholder="Institute...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="user_uni_subject" class="col-sm-2 col-form-label">University</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_uni_subject" name="user_uni_subject" placeholder="Enter Subject...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="user_uni_marks" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-2">
                        <input type="number" class="form-control" id="user_uni_marks" name="user_uni_marks" placeholder="Enter Marks...">
                    </div>
                    <div class="col-sm-2">
                        <input type="number" min="2000" max="2024" step="1" class="form-control" id="user_uni_from" name="user_uni_from" placeholder="From year...">
                    </div>
                    <div class="col-sm-2">
                        <input type="number" min="2000" max="2024" step="1" class="form-control" id="user_uni_to" name="user_uni_to" placeholder="To year...">
                    </div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="user_uni_institute" name="user_uni_institute" placeholder="Institute...">
                    </div>
                </div>

                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />
                <h5 class="text-center fw-bold">Professional Experience</h5>
                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />

                <div class="row mb-3">
                    <label for="user_professional_desig" class="col-sm-2 col-form-label">Company</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_professional_desig" name="user_professional_desig" placeholder="Enter Designation...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="user_professional_from" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-2">
                        <input type="number" min="2000" max="2024" step="1" class="form-control" id="user_professional_from" name="user_professional_from" placeholder="From year...">
                    </div>
                    <div class="col-sm-2">
                        <input type="number" min="2000" max="2024" step="1" class="form-control" id="user_professional_to" name="user_professional_to" placeholder="To year...">
                    </div>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" id="user_professional_institute" name="user_professional_institute" placeholder="Company...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="user_professional_exp" class="col-sm-2 col-form-label">Para about your work</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="user_professional_exp" name="user_professional_exp" style="height: 150px"></textarea>
                    </div>
                </div>


                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />
                <h5 class="text-center fw-bold">Your Self</h5>
                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />

                <div class="row mb-3">
                    <label for="user_self_para" class="col-sm-2 col-form-label">Para or 2 about you</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="user_self_para" name="user_self_para" style="height: 150px"></textarea>
                        <div id="user_self_para_error"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="add_info_btn" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10 d-flex align-content-center justify-content-center">
                        <button type="submit" class="btn btn-primary d-none" id="edit_info_btn">Update Info</button>
                        <button type="submit" class="btn btn-success" id="add_info_btn">Add Info</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        // Editing information if already added
        $.ajax({
            type: "POST",
            url: "backend/dbHandler.php",
            dataType: 'json',
            data: { action: 'getAboutInfo' },
            success: function(response) {
                if (response.message == 'success') {
                    // Populate Skills and Tools
                    //$('#user_skills').val(response.skills.skill);
                    populatePills('skill_pills', response.skills.skill);
                    //$('#user_rate_exp').val(response.skills.skill_ratings);
                    populatePills('skill_rate_pills', response.skills.skill_ratings);
                   // $('#user_tools').val(response.tools.tool);
                    populatePills('tool_pills', response.tools.tool);
                    //$('#user_tool_exp').val(response.tools.tool_ratings);
                    populatePills('tool_rate_pills', response.tools.tool_ratings);

                    // Populate Education
                    $('#user_metric_subject').val(response.edu.edu1.edu_subject);
                    $('#user_metric_marks').val(response.edu.edu1.edu_marks);
                    $('#user_metric_from').val(response.edu.edu1.edu_from);
                    $('#user_metric_to').val(response.edu.edu1.edu_to);
                    $('#user_metric_institute').val(response.edu.edu1.edu_institue);
                    $('#user_inter_subject').val(response.edu.edu2.edu_subject);
                    $('#user_inter_marks').val(response.edu.edu2.edu_marks);
                    $('#user_inter_from').val(response.edu.edu2.edu_from);
                    $('#user_inter_to').val(response.edu.edu2.edu_to);
                    $('#user_inter_institute').val(response.edu.edu2.edu_institue);
                    $('#user_grad_subject').val(response.edu.edu3.edu_subject);
                    $('#user_grad_marks').val(response.edu.edu3.edu_marks);
                    $('#user_grad_from').val(response.edu.edu3.edu_from);
                    $('#user_grad_to').val(response.edu.edu3.edu_to);
                    $('#user_grad_institute').val(response.edu.edu3.edu_institue);
                    $('#user_uni_subject').val(response.edu.edu4.edu_subject);
                    $('#user_uni_marks').val(response.edu.edu4.edu_marks);
                    $('#user_uni_from').val(response.edu.edu4.edu_from);
                    $('#user_uni_to').val(response.edu.edu4.edu_to);
                    $('#user_uni_institute').val(response.edu.edu4.edu_institue);

                    // Populate Professional Experience
                    $('#user_professional_desig').val(response.prof.designation);
                    $('#user_professional_from').val(response.prof.profession_from);
                    $('#user_professional_to').val(response.prof.profession_to);
                    $('#user_professional_institute').val(response.prof.profession_company);
                    $('#user_professional_exp').val(response.prof.profession_about);

                    // Populate Self Info
                    $('#user_self_para').val(response.para.user_about);

                    // Show Edit button and hide Add button if data exists
                    if (response.skills.skill) {
                        $('#edit_info_btn').removeClass('d-none');
                        $('#add_info_btn').addClass('d-none');
                    } else {
                        $('#edit_info_btn').addClass('d-none');
                        $('#add_info_btn').removeClass('d-none');
                    }
                } else {
                    toastr.error('No Old Data found');
                }
            },
            error: function(xhr, status, error) {
                toastr.error('Database error: ' + error);
            }
        });

        function populatePills(containerId, data) {
            let container = $('#' + containerId);
            container.empty();
            let items = data.split(',');
            items.forEach(item => {
                container.append(`<span class="badge badge-pill">${item.trim()}<span class="ml-1">x</span></span>`);
            });
        }


        // making pills of skills and tools
        $('.pills-input').on('input', function(e) {
            e.preventDefault();
            let input = $(this).val();
            let pillsContainer = $(this).siblings('.pills-container'); // Correct targeting of the sibling container

            if (input.includes(',')) {
                let skills = input.split(',');
                for (let i = 0; i < skills.length - 1; i++) {
                    let skill = skills[i].trim();
                    if (skill) {
                        let pill = $('<span class="badge badge-pill">' + skill + ' <span class="ml-1">x</span></span>');
                        pillsContainer.append(pill);
                    }
                }

                $(this).val(skills[skills.length - 1].trim());
            }
        });
        // Handle click to remove pill
        $(document).on('click', '.badge span', function() {
            $(this).parent().remove();
        });


        var skill_count; var skill_rate_count; var tool_count; var tool_rate_count;


        $('#user_skills').blur(function (){
            let skills = $('#skill_pills').text();
            if(skills !== ''){
                skills = skills.split(' x');
                skills = skills.filter(value => value.trim() !== '');
                $('#user_skills').val(skills);
            }
            skill_count = skills;
        })

        $('#user_rate_exp').blur(function (){
            let skill_rate = $('#skill_rate_pills').text();
            if(skill_rate !== ''){
                skill_rate = skill_rate.split(' x');
                skill_rate = skill_rate.filter(value => value.trim() !== '');
                $('#user_rate_exp').val(skill_rate);
            }
            skill_rate_count = skill_rate;
        })

        $('#user_tools').blur(function (){
            let tools = $('#tool_pills').text();
            if(tools){
                tools = tools.split(' x');
                tools = tools.filter(value => value.trim() !== '');
                $('#user_tools').val(tools);
            }
            tool_count = tools;
        })

        $('#user_tool_exp').blur(function (){
            let tool_rate = $('#tool_rate_pills').text();
            if(tool_rate !== ''){
                tool_rate = tool_rate.split(' x');
                tool_rate = tool_rate.filter(value => value.trim() !== '');
                $('#user_tool_exp').val(tool_rate);
            }
            tool_rate_count = tool_rate;
        })

        $('#about_form').on('submit', function (e) {
            e.preventDefault();

            let formData = new FormData(this);
            let isValid = true;

            if(skill_count.length !== skill_rate_count.length){
                isValid = false;
                toastr.error('All Skills must correspond to Ratings');
            }

            if(tool_count.length !== tool_rate_count.length){
                isValid = false;
                toastr.error('All Skills must correspond to Ratings');
            }


            //Validate the fields

            if($('#user_skills').val().trim() === ''){
                isValid = false;
                $('#user_skill_error').append('<p class="alert alert-danger">Please add your skills.</p>');
            }

            if($('#user_rate_exp').val().trim() === ''){
                isValid = false;
                $('#user_rate_exp_error').append('<p class="alert alert-danger">Please add your Skills rating.</p>');
            }

            if($('#user_tools').val().trim() === ''){
                isValid = false;
                $('#user_tool_error').append('<p class="alert alert-danger">Please add your Tools.</p>');
            }

            if($('#user_tool_exp').val().trim() === ''){
                isValid = false;
                $('#user_tool_rate_error').append('<p class="alert alert-danger">Please add your Tools Rating.</p>');
            }

            if($('#user_self_para').val().trim() === ''){
                isValid = false;
                $('#user_self_para_error').append('<p class="alert alert-danger">Please describe your self.</p>');
            }


            // If form is valid, get the data
            if (isValid) {
                formData.append('action', 'addAboutInfo');
                $.ajax({
                    type: "POST",
                    url: "backend/dbHandler.php",
                    dataType: 'json',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if(response.message == 'success'){
                            toastr.success('Information added successfully');
                            $('#about_form')[0].reset();
                        }else{
                            toastr.error('Something went Wrong database!!!');
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