<?php
require_once 'Database.php';

$db = new Database();

// Check if an action is set in the POST request
if (isset($_POST['action']) || isset($_GET['action'])) {
    $action = "";
    if(isset($_POST['action'])){
        $action = $_POST['action'];
    }else{
        $action = $_GET['action'];
    }

    switch ($action) {
        case 'register':
            // Collect form data
            $name = $_POST['name'];
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $plan = $_POST['plan'];

            // Call the register method
            $response = $db->register($name, $username, $email, $password, $plan);

            // Send JSON response
            echo json_encode(['message' => $response]);
            break;

        case 'login':
            // Collect login data
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Call the login method
            $response = $db->login($username, $password);
            echo json_encode($response);
            break;

        case 'logout':
            // Call the logout method
            $response = $db->logout();
            echo json_encode(['message' => $response]);
            break;

        case 'getUsers':
            // Call the getUsers method
            $response = $db->getUsers();
            if (isset($response['error'])) {
                echo json_encode(['message' => 'error', 'error' => $response['error']]);
            } else {
                echo json_encode(['message' => 'success', 'users' => $response]);
            }
            break;

        case 'updateUser':
            // Collect user status
            $user_id = $_POST['user_id'];
            $user_status = $_POST['user_status'];
            // Call the updateUser method
            $response = $db->updateUser($user_id,$user_status);
            echo json_encode(['message' => $response]);
            break;

        case 'deleteUser':
            // Collect user id
            $user_id = $_POST['user_id'];
            // Call the deleteUser method
            $response = $db->deleteUser($user_id);
            echo json_encode(['message' => $response]);
            break;

        case 'addPersonalInfo':

            $selected_portfolio = $_POST['selected_portfolio'];
            $user_profession = $_POST['user_profession'];
            $user_name = $_POST['user_name'];
            $user_email = $_POST['user_email'];
            $user_dob = $_POST['user_dob'];
            $user_age = $_POST['user_age'];
            $user_gender = $_POST['user_gender'];
            $user_img = '';
            $user_social_fb = $_POST['user_social_fb'];
            $user_social_tw = $_POST['user_social_tw'];
            $user_social_in = $_POST['user_social_in'];
            $user_address = $_POST['user_address'];
            $user_cell = $_POST['user_cell'];



            if (isset($_FILES['user_img']) && $_FILES['user_img']['error'] === UPLOAD_ERR_OK){
                $img = $_FILES['user_img']['tmp_name'];
                $user_img = file_get_contents($img);
            }

            $response = $db->addPersonalInfo(
                $selected_portfolio,$user_profession,$user_name,$user_email,$user_dob,
                $user_age,$user_gender,$user_img,$user_social_fb,$user_social_tw,$user_social_in,$user_address,$user_cell
            );
            echo json_encode(['message' => $response]);
            break;

        case 'addAboutInfo':
            $skills = $_POST['user_skills'];
            $skills_rating = $_POST['user_rate_exp'];
            $tools = $_POST['user_tools'];
            $tools_rating = $_POST['user_tool_exp'];
            $user_metric_subject = $_POST['user_metric_subject'];
            $user_metric_marks = $_POST['user_metric_marks'];
            $user_metric_from = $_POST['user_metric_from'];
            $user_metric_to = $_POST['user_metric_to'];
            $user_metric_institute = $_POST['user_metric_institute'];
            $user_inter_subject = $_POST['user_inter_subject'];
            $user_inter_marks = $_POST['user_inter_marks'];
            $user_inter_from = $_POST['user_inter_from'];
            $user_inter_to = $_POST['user_inter_to'];
            $user_inter_institute = $_POST['user_inter_institute'];
            $user_grad_subject = $_POST['user_grad_subject'];
            $user_grad_marks = $_POST['user_grad_marks'];
            $user_grad_from = $_POST['user_grad_from'];
            $user_grad_to = $_POST['user_grad_from'];
            $user_grad_institute = $_POST['user_grad_institute'];
            $user_uni_subject = $_POST['user_uni_subject'];
            $user_uni_marks = $_POST['user_uni_marks'];
            $user_uni_from = $_POST['user_uni_from'];
            $user_uni_to = $_POST['user_uni_to'];
            $user_uni_institute = $_POST['user_uni_institute'];
            $user_professional_desig = $_POST['user_professional_desig'];
            $user_professional_from = $_POST['user_professional_from'];
            $user_professional_to = $_POST['user_professional_to'];
            $user_professional_institute = $_POST['user_professional_institute'];
            $user_professional_exp = $_POST['user_professional_exp'];
            $user_self_para = $_POST['user_self_para'];

            $result = false;

            $result = $db->addSkills($skills,$skills_rating);
            if($result){
                $result = $db->addTools($tools,$tools_rating);
                if($result){
                    $result = $db->addEducation(
                        $user_metric_subject,$user_metric_marks,$user_metric_from,$user_metric_to,$user_metric_institute,
                        $user_inter_subject,$user_inter_marks,$user_inter_from,$user_inter_to,$user_inter_institute,
                        $user_grad_subject,$user_grad_marks,$user_grad_from,$user_grad_to,$user_grad_institute,
                        $user_uni_subject,$user_uni_marks,$user_uni_from,$user_uni_to,$user_uni_institute
                    );
                    if($result){
                        $result = $db->addProfession($user_professional_desig,$user_professional_from,
                            $user_professional_to,$user_professional_institute,$user_professional_exp);
                        if($result){
                            $result = $db->updatePersonalInfo($user_self_para);
                        }
                    }
                }
            }

            if($result){
                echo json_encode(['message' => 'success']);
            }else{
                echo json_encode(['message' => 'error']);
            }

            break;

        case 'getPersonalInfo':
            $response = $db->getPersonalInfo();
            if($response == 'error'){
                echo json_encode(['message' => 'error']);
            }else{
                echo json_encode(array("message" => 'success', "data" => $response));
            }
            break;

        case 'getAboutInfo':
            $skills = $db->getSkills();
            $tools = $db->getTools();
            $edu = $db->getEducation();
            $prof = $db->getProfession();
            $para = $db->getAboutPara();

            echo json_encode(array("message" => 'success', "skills" => $skills, "tools" => $tools,
                            "edu" => $edu, "prof" => $prof, "para" => $para));
            break;

        case 'getMyPortfolios':
            $response = $db->getMyPortFolio();
            $file = '';
            if($response['user_portfolio'] == 'iPortfolio'){
                ob_start();
                include '../components/plans/iportfolio.php';
                $file = ob_get_clean();
            }elseif ($response['user_portfolio'] == 'DevFolio'){
                ob_start();
                include '../components/plans/devfolio.php';
                $file = ob_get_clean();
            }elseif ($response['user_portfolio'] == 'KFolio'){
                ob_start();
                include '../components/plans/kfolio.php';
                $file = ob_get_clean();
            }elseif ($response['user_portfolio'] == 'LauraFolio'){
                ob_start();
                include '../components/plans/laurafolio.php';
                $file = ob_get_clean();
            }elseif ($response['user_portfolio'] == 'MyResume'){
                ob_start();
                include '../components/plans/myresume.php';
                $file = ob_get_clean();
            }
            echo json_encode(['message' => 'success', 'portfolio' => $file]);
            break;
        default:
            // Handle unknown actions
            echo json_encode(['message' => 'Invalid action']);
            break;
    }
} else {
    // No action was provided
    header('Content-Type: application/json');
    echo json_encode(['message' => 'No action specified']);
}


//echo '<pre>';
//var_dump($skills);
//echo '</pre>';