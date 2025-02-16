<?php

require_once 'Database.php';

class UserActions
{

    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function handleRequest()
    {
        // Check if an action is set in the POST or GET request
        if (isset($_POST['action']) || isset($_GET['action'])) {
            $action = isset($_POST['action']) ? $_POST['action'] : $_GET['action'];

            switch ($action) {
                case 'register':
                    $this->register();
                    break;
                case 'login':
                    $this->login();
                    break;
                case 'logout':
                    $this->logout();
                    break;
                case 'getUsers':
                    $this->getUsers();
                    break;
                case 'updateUser':
                    $this->updateUser();
                    break;
                case 'deleteUser':
                    $this->deleteUser();
                    break;
                case 'addPersonalInfo':
                case 'editPersonalInfo':
                    $this->personalInformation($action);
                    break;
                case 'addAboutInfo':
                case 'editAboutInfo':
                    $this->aboutInformation($action);
                    break;
                case 'getPersonalInfo':
                    $this->getPersonalInfo();
                    break;
                case 'getAboutInfo':
                    $this->getAboutInfo();
                    break;
                case 'getMyPortfolios':
                    $this->getMyPortfolios();
                    break;
                case 'openPortfolio':
                    $this->openPortfolio();
                    break;
                case 'getPrograms':
                    $this->getPrograms();
                    break;
                case 'updateProfile':
                    $this->updateProfile();
                    break;
                default:
                    echo json_encode(['message' => 'Invalid action']);
                    break;
            }
        } else {
            echo json_encode(['message' => 'No action specified']);
        }
    }

    private function register()
    {
        $name = $_POST['name'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $plan = $_POST['plan'];

        $response = $this->db->register($name, $username, $email, $password, $plan);
        echo json_encode(['message' => $response]);
    }

    private function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $response = $this->db->login($username, $password);
        echo json_encode($response);
    }

    private function logout()
    {
        $response = $this->db->logout();
        echo json_encode(['message' => $response]);
    }

    private function getUsers()
    {
        $response = $this->db->getUsers();
        if (isset($response['error'])) {
            echo json_encode(['message' => 'error', 'error' => $response['error']]);
        } else {
            echo json_encode(['message' => 'success', 'users' => $response]);
        }
    }

    private function updateUser()
    {
        $user_id = $_POST['user_id'];
        $user_status = $_POST['user_status'];

        $response = $this->db->updateUser($user_id, $user_status);
        echo json_encode(['message' => $response]);
    }

    private function deleteUser()
    {
        $user_id = $_POST['user_id'];

        $response = $this->db->deleteUser($user_id);
        echo json_encode(['message' => $response]);
    }

    private function personalInformation($action)
    {
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

        if ($action == 'addPersonalInfo' || ($action == 'editPersonalInfo' && $_FILES['user_img']['name'] != '')) {
            if (isset($_FILES['user_img']) && $_FILES['user_img']['error'] === UPLOAD_ERR_OK) {
                $img = $_FILES['user_img']['tmp_name'];
                $user_img = file_get_contents($img);
            }
        }

        if ($action == 'addPersonalInfo') {
            $response = $this->db->addPersonalInfo(
                $selected_portfolio,
                $user_profession,
                $user_name,
                $user_email,
                $user_dob,
                $user_age,
                $user_gender,
                $user_img,
                $user_social_fb,
                $user_social_tw,
                $user_social_in,
                $user_address,
                $user_cell
            );
            echo json_encode(['message' => $response]);
        }

        if ($action == 'editPersonalInfo') {
            $response = $this->db->editPersonalInfo(
                $selected_portfolio,
                $user_profession,
                $user_name,
                $user_email,
                $user_dob,
                $user_age,
                $user_gender,
                $user_img,
                $user_social_fb,
                $user_social_tw,
                $user_social_in,
                $user_address,
                $user_cell
            );
            echo json_encode(['message' => $response]);
        }
    }

    private function aboutInformation($action)
    {
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
        $user_grad_to = $_POST['user_grad_to'];
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

        $result = '';
        if ($action == 'addAboutInfo') {
            $todo = 'add';
            $result = $this->db->Skills($skills, $skills_rating, $todo)
                && $this->db->Tools($tools, $tools_rating, $todo)
                && $this->db->Education(
                    $user_metric_subject,
                    $user_metric_marks,
                    $user_metric_from,
                    $user_metric_to,
                    $user_metric_institute,
                    $user_inter_subject,
                    $user_inter_marks,
                    $user_inter_from,
                    $user_inter_to,
                    $user_inter_institute,
                    $user_grad_subject,
                    $user_grad_marks,
                    $user_grad_from,
                    $user_grad_to,
                    $user_grad_institute,
                    $user_uni_subject,
                    $user_uni_marks,
                    $user_uni_from,
                    $user_uni_to,
                    $user_uni_institute,
                    $todo
                )
                && $this->db->Profession(
                    $user_professional_desig,
                    $user_professional_from,
                    $user_professional_to,
                    $user_professional_institute,
                    $user_professional_exp,
                    $todo
                )
                && $this->db->updatePersonalInfo($user_self_para);
        }

        if ($action == 'editAboutInfo') {
            $todo = 'update';
            $result = $this->db->Skills($skills, $skills_rating, $todo)
                && $this->db->Tools($tools, $tools_rating, $todo)
                && $this->db->Education(
                    $user_metric_subject,
                    $user_metric_marks,
                    $user_metric_from,
                    $user_metric_to,
                    $user_metric_institute,
                    $user_inter_subject,
                    $user_inter_marks,
                    $user_inter_from,
                    $user_inter_to,
                    $user_inter_institute,
                    $user_grad_subject,
                    $user_grad_marks,
                    $user_grad_from,
                    $user_grad_to,
                    $user_grad_institute,
                    $user_uni_subject,
                    $user_uni_marks,
                    $user_uni_from,
                    $user_uni_to,
                    $user_uni_institute,
                    $todo
                )
                && $this->db->Profession(
                    $user_professional_desig,
                    $user_professional_from,
                    $user_professional_to,
                    $user_professional_institute,
                    $user_professional_exp,
                    $todo
                )
                && $this->db->updatePersonalInfo($user_self_para);
        }


        if ($result) {
            echo json_encode(['message' => 'success']);
        } else {
            echo json_encode(['message' => 'error']);
        }
    }

    private function getPersonalInfo()
    {
        $response = $this->db->getPersonalInfo();
        if ($response == 'error') {
            echo json_encode(['message' => 'error']);
        } else {
            echo json_encode(['message' => 'success', 'data' => $response]);
        }
    }

    private function getAboutInfo()
    {
        $skills = $this->db->getSkills();
        $tools = $this->db->getTools();
        $edu = $this->db->getEducation();
        $prof = $this->db->getProfession();
        $para = $this->db->getAboutPara();

        echo json_encode([
            'message' => 'success',
            'skills' => $skills,
            'tools' => $tools,
            'edu' => $edu,
            'prof' => $prof,
            'para' => $para
        ]);
    }

    private function getMyPortfolios()
    {
        $response = $this->db->getMyPortFolio();
        $file = '';

        switch ($response['user_portfolio']) {
            case 'iPortfolio':
                ob_start();
                include '../components/plans/iportfolio.php';
                $file = ob_get_clean();
                break;
            case 'DevFolio':
                ob_start();
                include '../components/plans/devfolio.php';
                $file = ob_get_clean();
                break;
            case 'KFolio':
                ob_start();
                include '../components/plans/kfolio.php';
                $file = ob_get_clean();
                break;
            case 'LauraFolio':
                ob_start();
                include '../components/plans/laurafolio.php';
                $file = ob_get_clean();
                break;
            case 'MyResume':
                ob_start();
                include '../components/plans/myresume.php';
                $file = ob_get_clean();
                break;
        }

        echo json_encode(['message' => 'success', 'portfolio' => $file, 'user_id' => $response['user_id'], 'user_portfolio' => $response['user_portfolio']]);
    }

    private function openPortfolio()
    {
        $personal = $this->db->getPersonalInfo();
        $skills = $this->db->getSkills();
        $tools = $this->db->getTools();
        $edu = $this->db->getEducation();
        $prof = $this->db->getProfession();

        echo json_encode([
            'message' => 'success',
            'personal' => $personal,
            'skills' => $skills,
            'tools' => $tools,
            'edu' => $edu,
            'prof' => $prof
        ]);
    }

    private function getPrograms()
    {
        $response = $this->db->getPrograms();
        echo json_encode(['message' => 'success', 'programs' => $response]);
    }

    private function updateProfile()
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $plan = $_POST['plan'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $response = $this->db->updateProfile($name, $email, $plan, $username, $password);
        echo json_encode(['message' => $response]);
    }
}

// Instantiation and handling the request
$actions = new UserActions();
$actions->handleRequest();
