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
            $stmt = $this->conn->prepare("SELECT user_id, name, username, email, role, plan, status FROM users");
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
        session_start();
        unset($_SESSION['portfolio']);
        $_SESSION['portfolio'] = $portfolio;
        return true;
    }
}

