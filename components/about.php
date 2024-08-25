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
            <form>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Portfolio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" value="Portfolio" id="selected_portfolio" readonly>
                    </div>
                </div>

                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />
                <h5 class="text-center fw-bold">Skills & Tools</h5>
                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Skills</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control pills-input" id="user_skills" name="user_skills" placeholder="Enter comma separated skills...">
                        <div id="skill_pills" class="mt-2 pills pills-container d-flex flex-wrap"></div>
                    </div>
                    <label for="inputText" class="col-sm-1 col-form-label">Rating</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control pills-input" id="user_rate_exp" name="user_rate_exp" placeholder="Rate your skills out of 100 comma separated ...">
                        <div id="skill_rate_pills" class="mt-2 pills pills-container"></div>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Tools</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control pills-input" id="user_tools" name="user_tools" placeholder="Enter comma separated tools you have used...">
                        <div id="tool_pills" class="mt-2 pills pills-container d-flex flex-wrap"></div>
                    </div>
                    <label for="inputEmail" class="col-sm-1 col-form-label">Rating</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control pills-input" id="user_tool_exp" name="user_tool_exp" placeholder="Rate your tool out of 100 comma separated ...">
                        <div id="tool_rate_pills" class="mt-2 pills pills-container"></div>
                    </div>
                </div>

                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />
                <h5 class="text-center fw-bold">Education</h5>
                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Matric</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_mertic_subject" name="user_mertic_subject" placeholder="Enter Subject...">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"></label>
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
                    <label for="inputText" class="col-sm-2 col-form-label">Intermediate</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_inter_subject" name="user_inter_subject" placeholder="Enter Subject...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"></label>
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
                    <label for="inputText" class="col-sm-2 col-form-label">Graduation</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_grad_subject" name="user_grad_subject" placeholder="Enter Subject...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"></label>
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
                    <label for="inputText" class="col-sm-2 col-form-label">University</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_uni_subject" name="user_uni_subject" placeholder="Enter Subject...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"></label>
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
                    <label for="inputText" class="col-sm-2 col-form-label">Company</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="user_professional_desig" name="user_professional_desig" placeholder="Enter Designation...">
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label"></label>
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
                    <label for="inputText" class="col-sm-2 col-form-label">Para about your work</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="user_professional_exp" name="user_professional_exp" style="height: 150px"></textarea>
                    </div>
                </div>


                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />
                <h5 class="text-center fw-bold">Your Self</h5>
                <hr class="bg-success border-2 border-top border-success mt-2 mb-2" />

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Para or 2 about you</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" style="height: 150px"></textarea>
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10 d-flex align-content-center justify-content-center">
                        <button type="submit" class="btn btn-primary">Add Info</button>
                    </div>
                </div>

            </form><!-- End General Form Elements -->

        </div>
    </div>

</div>

<script>
    $(document).ready(function() {
        $('.pills-input').on('input', function(e) {
            var input = $(this).val();
            var pillsContainer = $(this).siblings('.pills-container'); // Correct targeting of the sibling container

            if (input.includes(',')) {
                var skills = input.split(',');
                for (var i = 0; i < skills.length - 1; i++) {
                    var skill = skills[i].trim();
                    if (skill) {
                        var pill = $('<span class="badge badge-pill">' + skill + ' <span class="ml-1">&times;</span></span>');
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
    });


</script>