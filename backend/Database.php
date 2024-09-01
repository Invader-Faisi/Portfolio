<?php
class Database
{
    private $host = "localhost";
    private $dbname = "dppg";
    private $username = "root";
    private $password = "";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            exit();
        }
    }

    // Registration Method
    public function register($name, $username, $email, $password, $plan)
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        try {
            $query = "INSERT INTO users (name,username, email, password, plan) VALUES (?,?, ?, ?, ?)";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$name, $username, $email, $hashedPassword, $plan]);
            
            return "success";
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }

    }

    // Login Method
    public function login($username, $password)
    {
        try {
            $query = "SELECT * FROM users WHERE username = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$username]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($password, $user['password'])) {
                session_start();
                $status = $user['status'];
                if($status == 'Approved'){
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['name'] = $user['name'];
                    $_SESSION['role'] = $user['role'];
                    $_SESSION['plan'] = $user['plan'];
                    if ($user['role'] == "Admin") {
                        return ['user' => "admin", 'status' => $status];
                    } else {
                        return ['user' => "user", 'status' => $status];
                    }
                }else{
                    return ['user' => "user", 'status' => $status];
                }
            }else{
                return ['message' => 'Email or Password is incorrect !!!'];
            }
        } catch (PDOException $e) {
                return ['error' => $e->getMessage()];
            }
    }

    // Logout Method
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        return "success";
    }

    function getUsers() {
        try {
            $query = "SELECT user_id, name, username, email, role, plan, status FROM users";
            $stmt = $this->conn->prepare($query);
            $stmt->execute();
            // Fetch all users as an associative array
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    function updateUser($user_id,$user_status) {
        try {
            $query = "UPDATE users SET status = ? WHERE user_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$user_status,$user_id]);
            
            return "success";
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    function deleteUser($user_id){
        try {
            $query = "DELETE FROM users WHERE user_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$user_id]);
            
            return "success";
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    function addPersonalInfo($selected_portfolio,$user_profession,$user_name,$user_email,$user_dob,
        $user_age,$user_gender,$user_img,$user_social_fb,$user_social_tw,$user_social_in,$user_address,$user_cell){

        $user_id = $this->getSession();

        $query = "INSERT INTO portfolios (user_id, user_portfolio, user_profession, user_name, user_email, user_dob, user_age, user_gender, user_img, user_address, user_cell) 
         VALUES (:user_id, :user_portfolio, :user_profession, :user_name, :user_email, :user_dob, :user_age, :user_gender, :user_img, :user_address, :user_cell)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':user_id', $user_id);
        $stmt->bindParam(':user_portfolio', $selected_portfolio);
        $stmt->bindParam(':user_profession', $user_profession);
        $stmt->bindParam(':user_name', $user_name);
        $stmt->bindParam(':user_email', $user_email);
        $stmt->bindParam(':user_dob', $user_dob);
        $stmt->bindParam(':user_age', $user_age);
        $stmt->bindParam(':user_gender', $user_gender);
        $stmt->bindParam(':user_img', $user_img, PDO::PARAM_LOB);
        $stmt->bindParam(':user_address', $user_address);
        $stmt->bindParam(':user_cell', $user_cell);

        try {
            $result = $stmt->execute();
            
            if($result){
                $result = $this->addSocialMedia($user_id,$user_social_fb,$user_social_tw,$user_social_in);
                return ($result) ? "success" : "error";
            }else{
                return "error";
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            return ['error' => $e->getMessage()];
        }
    }

    private function addSocialMedia($user_id,$user_social_fb,$user_social_tw,$user_social_in)
    {
        try {
            $query = "INSERT INTO social (user_id,social_fb, social_tw, social_in) VALUES (?,?,?,?)";
            $stmt = $this->conn->prepare($query);
            $result = $stmt->execute([$user_id,$user_social_fb,$user_social_tw,$user_social_in]);
            
            if ($result) {
                return $this->conn->lastInsertId();
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function addSkills($skill,$skill_rating){
        $user_id = $this->getSession();

        $skills = explode(',',$skill);
        $rating = explode(',',$skill_rating);
        try {
            $query = "INSERT INTO skills (user_id, skill, skill_rating) VALUES (?, ?, ?)";
            $stmt = $this->conn->prepare($query);

            for ($i = 0; $i < count($skills); $i++) {
                $currentSkill = trim($skills[$i]);
                $currentRating = trim($rating[$i]);
                $result = $stmt->execute([$user_id,$currentSkill,$currentRating]);
            }

            if ($result) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function addTools($tool,$tools_rating)
    {
        $user_id = $this->getSession();

        $tools = explode(',',$tool);
        $rating = explode(',',$tools_rating);

        $result = false;

        try {
            $query = "INSERT INTO tools (user_id, tool, tool_rating) VALUES (?, ?, ?)";
            $stmt = $this->conn->prepare($query);

            for ($i = 0; $i < count($tools); $i++) {
                $currentTool = trim($tools[$i]);
                $currentRating = trim($rating[$i]);
                $result = $stmt->execute([$user_id,$currentTool,$currentRating]);
            }
            
            if ($result) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function addEducation(
        $user_metric_subject,$user_metric_marks,$user_metric_from,$user_metric_to,$user_metric_institute,
        $user_inter_subject,$user_inter_marks,$user_inter_from,$user_inter_to,$user_inter_institute,
        $user_grad_subject,$user_grad_marks,$user_grad_from,$user_grad_to,$user_grad_institute,
        $user_uni_subject,$user_uni_marks,$user_uni_from,$user_uni_to,$user_uni_institute
    )
    {
        $user_id = $this->getSession();
        $result = $this->insertEducation($user_id,"metric",$user_metric_subject,$user_metric_marks,$user_metric_from,$user_metric_to,$user_metric_institute);
        if($result){
            $result = $this->insertEducation($user_id,"Intermediate",$user_inter_subject,$user_inter_marks,$user_inter_from,$user_inter_to,$user_inter_institute);
            if($result){
                $result = $this->insertEducation($user_id,"Graduation",$user_grad_subject,$user_grad_marks,$user_grad_from,$user_grad_to,$user_grad_institute);
                if($result){
                    $result = $this->insertEducation($user_id,"University",$user_uni_subject,$user_uni_marks,$user_uni_from,$user_uni_to,$user_uni_institute);
                    if ($result) {
                        return true;
                    } else {
                        return false;
                    }
                }
            }
        }
        return $result;
    }

    public function addProfession($user_professional_desig,$user_professional_from,
                $user_professional_to,$user_professional_institute,$user_professional_exp)
    {
        $user_id = $this->getSession();

        try {
            $query = "INSERT INTO profession (user_id,designation,profession_from,profession_to,
                        profession_company,profession_about) VALUES (?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($query);
            $result = $stmt->execute([$user_id,$user_professional_desig,$user_professional_from,
                $user_professional_to,$user_professional_institute,$user_professional_exp]);

            if ($result) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function updatePersonalInfo($user_self_para)
    {
        $user_id = $this->getSession();
        try {
            $query = "UPDATE portfolios SET user_about = ? WHERE user_id = ?";
            $stmt = $this->conn->prepare($query);
            $result = $stmt->execute([$user_self_para,$user_id]);

            if ($result) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    private function insertEducation($user,$level,$sub,$marks,$from,$to,$school){

        try {
            $query = "INSERT INTO education (user_id, edu, edu_subject,edu_marks,edu_from,edu_to,edu_institue) 
                        VALUES (?,?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($query);
            $result = $stmt->execute([$user,$level,$sub,$marks,$from,$to,$school]);

            if ($result) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getPersonalInfo()
    {
        $user_id = $this->getSession();

        try {
            $query = "SELECT p.*, s.* FROM portfolios p JOIN social s ON p.user_id = s.user_id WHERE p.user_id = ? LIMIT 1;
";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$user_id]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                // Convert BLOB image data to base64
                $user_img_blob = $result['user_img'];
                $user_img = base64_encode($user_img_blob);
                $result['user_img'] = 'data:image/jpeg;base64,' . $user_img;

                return $result;
            } else {
                return "error";
            }

        }catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getSkills(){
        $user_id = $this->getSession();

        try {
            $query = "SELECT
                            GROUP_CONCAT(skill ORDER BY skill SEPARATOR ', ') AS skill,
                            GROUP_CONCAT(skill_rating ORDER BY skill_rating SEPARATOR ', ') AS skill_ratings
                        FROM
                            skills
                        WHERE
                            user_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$user_id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getTools(){
        $user_id = $this->getSession();

        try {
            $query = "SELECT
                            GROUP_CONCAT(tool ORDER BY tool SEPARATOR ', ') AS tool,
                            GROUP_CONCAT(tool_rating ORDER BY tool_rating SEPARATOR ', ') AS tool_ratings
                        FROM
                            tools
                        WHERE
                            user_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$user_id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);

        }catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getEducation(){
        $user_id = $this->getSession();

        try {
            $query = "SELECT * FROM education WHERE user_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$user_id]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $edu = array();
            foreach ($result as $index => $row)
            {
                $edu['edu' .($index + 1)] = $row;
            }
            return $edu;
        }catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getProfession(){
        $user_id = $this->getSession();

        try {
            $query = "SELECT * FROM profession WHERE user_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$user_id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getAboutPara(){
        $user_id = $this->getSession();

        try {
            $query = "SELECT user_about FROM portfolios WHERE user_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$user_id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    public function getMyPortFolio()
    {
        $user_id = $this->getSession();
        try {
            $query = "SELECT user_portfolio FROM portfolios WHERE user_id = ?";
            $stmt = $this->conn->prepare($query);
            $stmt->execute([$user_id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }catch (PDOException $e) {
            return ['error' => $e->getMessage()];
        }
    }

    private function getSession()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        return $_SESSION['user_id'];
    }

}


//        echo '<pre>';
//        var_dump($skills);
//        echo '</pre>';
//        $result = false;





