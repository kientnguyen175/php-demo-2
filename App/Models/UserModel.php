<?php
    class UserModel extends Database
    {
        public function getUser($username)
        {
            $data = $this->fetchARecord("
                SELECT id, username, password 
                FROM users 
                WHERE username = '$username'
            ");
            return $data;
        }

        public function checkUser($username, $password)
        {
            return $this->checkExistRecord("
                SELECT username, password 
                FROM users 
                WHERE username = '$username' 
                AND password = '$password'
            ");
        }

        public function checkUsername($username)
        {
            return $this->checkExistRecord("
                SELECT id FROM users WHERE username = '$username'
            ");
        }

        public function register($data)
        {
            $username = $data['username'];
            $password = $data['password'];
            return $this->execute("
                INSERT INTO users(username, password)
                VALUES ('$username', '$password')
            ");
        }
    }
