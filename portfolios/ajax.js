$(document).ready(function() {
    // Function to get query parameter by name
    function getQueryParam(param) {
        let urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    // getting user id from url
    let userId = getQueryParam('user_id');
    console.log('User ID:', userId);

    $.ajax({
        type: "POST",
        url: "/Portfolio/backend/dbHandler.php",
        dataType: 'json',
        data: {action: 'openPortfolio', user_id: userId},
        success: function(response) {
            if(response.message === 'success')
            {
                $('#user_img').attr('src', response.personal.user_img);
                $('#sitename').text(response.personal.user_name);
                if(response.personal.social_fb)
                {
                    $('#social').append('<a href="${response.personal.social_fb}" class="facebook"><i class="bi bi-facebook"></i></a>')
                }
                if(response.personal.social_tw)
                {
                    $('#social').append('<a href="${response.personal.social_tw}" class="twitter"><i class="bi bi-twitter-x"></i></a>')
                }
                if(response.personal.social_in)
                {
                    $('#social').append('<a href="${response.personal.social_in}" class="linkedin"><i class="bi bi-linkedin"></i></a>')
                }
                $('#site_img').attr('src', response.personal.user_img);
                $('#user_heading_name').text(response.personal.user_name);
                $('#user_about').text(response.personal.user_about);
                $('#user_about_img').attr('src', response.personal.user_img);
                $('#user_profession').text(response.personal.user_profession);
                $('#user_dob').text(response.personal.user_dob);
                $('#user_cell').text(response.personal.user_cell);
                $('#user_address').text(response.personal.user_address);
                $('#user_age').text(response.personal.user_age);
                let education;
                if(response.edu.edu1.edu != '')
                {
                    education = response.edu.edu1.edu;
                }
                if(response.edu.edu2.edu != '')
                {
                    education = response.edu.edu2.edu_subject;
                }
                if(response.edu.edu3.edu != '')
                {
                    education = response.edu.edu3.edu_subject;
                }
                if(response.edu.edu4.edu != '')
                {
                    education = response.edu.edu4.edu_subject;
                }
                $('#user_edu').text(education);
                $('#user_email').text(response.personal.user_email);
                // -----------------------------------------------------------------------------------
                let skills = response.skills.skill.split(', ');
                let ratings = response.skills.skill_ratings.split(', ');

                for (let i = 0; i < skills.length; i++) {
                    let skill = skills[i];
                    let rating = ratings[i];

                    let skillHtml = `
                    <div class="progress">
                      <span class="skill"><span>${skill}</span> <i class="val">${rating}%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="${rating}" aria-valuemin="0" aria-valuemax="100" style="width: ${rating}%;"></div>
                      </div>
                    </div>
                `;
                    $('#user_skills').append(skillHtml);
                }

                let tools = response.tools.tool.split(', ');
                let tool_ratings = response.tools.tool_ratings.split(', ');

                for (let i = 0; i < tools.length; i++) {
                    let tool = tools[i];
                    let rating = tool_ratings[i];

                    let toolHtml = `
                    <div class="progress">
                      <span class="skill"><span>${tool}</span> <i class="val">${rating}%</i></span>
                      <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="${rating}" aria-valuemin="0" aria-valuemax="100" style="width: ${rating}%;"></div>
                      </div>
                    </div>
                `;
                    $('#user_tools').append(toolHtml);
                }
                // ------------------------------------------------------------------------------------
                $('#user_resume_about').text(response.personal.user_about);
                $('#user_resume_user_name').text(response.personal.user_name);
                $('#user_resume_address').text(response.personal.user_address);
                $('#user_resume_cell').text(response.personal.user_cell);
                $('#user_resume_email').text(response.personal.user_email);

                $.each(response.edu, function(index, item) {
                    let iPDiv = $('<div class="resume-item"></div>');
                    let devDiv = $('<div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100" ><div class="pricing-item"></div></div>');
                    let edu_html = `                    
                        <h4>${item.edu} with ${item.edu_subject}</h4>
                        <h5>${item.edu_from} - ${item.edu_to}</h5>
                        <h5>${item.edu_marks} Marks</h5>
                        <p><em>${item.edu_institue}</em></p>                    
                    `;
                    iPDiv.append(edu_html);
                    $('#resume_edu').after(iPDiv);

                    devDiv.append(edu_html);
                    $('#dev_edu').after(devDiv);



                });

                let iPDiv = $('<div class="resume-item"></div>');
                let profession_html = `                    
                        <h4>${response.prof.designation}</h4>
                        <h5>${response.prof.profession_from} - ${response.prof.profession_to}</h5>
                        <p><em>${response.prof.profession_company}</em></p>  
                        <p><em>${response.prof.profession_about}</em></p>                  
                    `;
                iPDiv.append(profession_html);
                $('#resume_profession').after(iPDiv);
                $('#dev_profession').after(iPDiv);

                $('#user_contact_address').text(response.personal.user_address);
                $('#user_contact_cell').text(response.personal.user_cell);
                $('#user_contact_email').text(response.personal.user_email);




            //     ------------------------------------------   Devfolio   ------------------------------------
                if ($('#dev_skills').length || $('#laura_skills').length) {
                    let dev_skills = response.skills.skill.split(', ');
                    let dev_ratings = response.skills.skill_ratings.split(', ');

                    for (let i = 0; i < dev_skills.length; i++) {
                        let skill = dev_skills[i];
                        let rating = dev_ratings[i];

                        let skillHtml = `
                            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                                <div>
                                    <h4 class="title">${skill}</h4>
                                    <p class="description">Skill Experience (${rating}%)</p>
                                </div>
                            </div>
                        `;

                        let lauraskillHtml = `
                            <div class="col-lg-6">
                                <div class="pricing-item d-flex justify-content-between">
                                    <h3>${skill} experience</h3>
                                    <h4>${rating}%</h4>
                                </div>
                            </div>
                        `;

                        $('#dev_skills').append(skillHtml);
                        $('#laura_skills').append(lauraskillHtml);

                    }
                    let dev_tools = response.tools.tool.split(', ');
                    let dev_tool_ratings = response.tools.tool_ratings.split(', ');

                    for (let i = 0; i < dev_tools.length; i++) {
                        let tool = dev_tools[i];
                        let rating = dev_tool_ratings[i];

                        let toolHtml = `
                            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                                <div>
                                    <h4 class="title">${tool}</h4>
                                    <p class="description">Tool Experience (${rating}%)</p>
                                </div>
                            </div>
                        `;

                        let lauraskillHtml = `
                            <div class="col-lg-6">
                                <div class="pricing-item d-flex justify-content-between">
                                    <h3>${tool} experience</h3>
                                    <h4>${rating}%</h4>
                                </div>
                            </div>
                        `;
                            $('#dev_skills').append(toolHtml);
                            $('#laura_skills').append(lauraskillHtml);
                    }
                }else{
                    console.error("#dev_skills container not found.");
                }
            //     --------------------------------------------------------------------------------------------
            }
        },
        error: function(xhr, status, error) {
            toastr.error('Database error: ' + error);
        }
    });
});