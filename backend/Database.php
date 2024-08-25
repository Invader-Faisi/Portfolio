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

            return "successfull";
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

    function addPorfolio($portfolio){
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        unset($_SESSION['portfolio']);
        $_SESSION['portfolio'] = $portfolio;
        return true;
    }

    function addPersonalInfo($selected_portfolio,$user_profession,$user_name,$user_email,$user_dob,
        $user_age,$user_gender,$user_img,$user_social,$user_address,$user_cell){

        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $user_id = $_SESSION['user_id'];

        $query = "INSERT INTO portfolios (user_id, user_portfolio, user_profession, user_name, user_email, user_dob, user_age, user_gender, user_img, user_social, user_address, user_cell) 
         VALUES (:user_id, :user_portfolio, :user_profession, :user_name, :user_email, :user_dob, :user_age, :user_gender, :user_img, :user_social, :user_address, :user_cell)";

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
        $stmt->bindParam(':user_social', $user_social);
        $stmt->bindParam(':user_address', $user_address);
        $stmt->bindParam(':user_cell', $user_cell);

        try {
            $stmt->execute();
            return "success";
        } catch (PDOException $e) {
            error_log($e->getMessage());
            return ['error' => $e->getMessage()];
        }

    }
}

