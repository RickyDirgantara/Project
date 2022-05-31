<?php

class Auth

{
    private $db;

    private $error;

    function __construct($db_conn)

    {

        $this->db = $db_conn;

        session_start();
    }

   // Registrasi User baru 

    public function register($nama, $email, $password)

    {

        try {


            $hashPasswd = password_hash($password, PASSWORD_DEFAULT);

            $stmt = $this->db->prepare("INSERT INTO users(nama, email, password) VALUES(:nama, :email, :pass)");

            $stmt->bindParam(":nama", $nama);

            $stmt->bindParam(":email", $email);

            $stmt->bindParam(":pass", $hashPasswd);

            $stmt->execute();

            return true;
        } catch (PDOException $e) {



            if ($e->errorInfo[0] == 23000) {

                $this->error = "Email already used!";

                return false;
            } else {

                echo $e->getMessage();

                return false;
            }
        }
    }

// user login

    public function login($email, $password)

    {

        try {

            $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");

            $stmt->bindParam(":email", $email);

            $stmt->execute();

            $data = $stmt->fetch();


            if ($stmt->rowCount() > 0) {
                if (password_verify($password, $data['password'])) {

                    $_SESSION['user_session'] = $data['nama'];

                    return true;
                } else {

                    $this->error = "Invalid Email or Password!";

                    return false;
                }
            } else {

                $this->error = "Invalid Email or Password!";

                return false;
            }
        } catch (PDOException $e) {

            echo $e->getMessage();

            return false;
        }
    }


    public function isLoggedIn()
    {

        if (isset($_SESSION['user_session'])) {

            return true;
        }
    }


    public function getUser()
    {


        if (!$this->isLoggedIn()) {

            return false;
        }

        try {

            $stmt = $this->db->prepare("SELECT * FROM users WHERE nama = :nama");

            $stmt->bindParam(":nama", $_SESSION['user_session']);

            $stmt->execute();

            return $stmt->fetch();
        } catch (PDOException $e) {

            echo $e->getMessage();

            return false;
        }
    }

    public function logout()
    {

        session_destroy();


        unset($_SESSION['user_session']);

        return true;
    }


    public function getLastError()
    {

        return $this->error;
    }


}