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

        case 'addPorfolio':
            // Collect portfolio
            $portfolio = $_POST['portfolio'];
            $response = $db->addPorfolio($portfolio);
            if($response){
                echo json_encode(['message' => $response]);
            }
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

            $user_social = $user_social_fb;

            if(!empty($user_social_tw)){
                $user_social = $user_social . ',' . $user_social_tw;
            }
            if (!empty($user_social_in)){
                $user_social = $user_social . ',' . $user_social_in;
            }
            if(!empty($user_social_tw) && !empty($user_social_in)){
                $user_social = $user_social . ',' . $user_social_tw .','. $user_social_in;
            }



            if (isset($_FILES['user_img']) && $_FILES['user_img']['error'] === UPLOAD_ERR_OK){
                $img = $_FILES['user_img']['tmp_name'];
                $user_img = file_get_contents($img);
            }

            $response = $db->addPersonalInfo(
                $selected_portfolio,$user_profession,$user_name,$user_email,$user_dob,
                $user_age,$user_gender,$user_img,$user_social,$user_address,$user_cell
            );
            echo json_encode(['message' => $response]);
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
