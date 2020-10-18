<?php

class User_model
{
    private $table = "user";
    private $dbh;

    public function __construct()
    {
        $this->dbh = new Database;
    }

    public function loginUser($data)
    {
        $query = 'SELECT * FROM user WHERE username= :username AND password= :password';
        $this->dbh->query($query);
        $this->dbh->bind('username', $data['username']);
        $this->dbh->bind('password', $data['password']);
        
        $result = $this->dbh->single();
      
        if (count($result) > 0) {
            $verify = $data['password']  == $result['password'];
            if ($verify) {
                $_SESSION['user'] = [
                    'username' => $result[0]->username,
                    'status' => 'Logged In'
                ];
                return 1;
               
            }
            return 0;
        }
        
    }

    public function registerUser($data)
    {
        $query = "INSERT INTO ". $this->table ." (username, password) VALUES (:username, :password)";
        $this->dbh->query($query);
        $this->dbh->bind('username', $data['username']);
        $this->dbh->bind('password', $data['password']);
        // var_dump($data);
        $this->dbh->execute();

        return $this->dbh->rowCount();
    }
}