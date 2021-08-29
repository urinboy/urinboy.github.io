<?php

require_once 'models/BaseModel.php';

class User extends BaseModel
{
    public function isEmailExist($email)
    {
        $sql = 'SELECT count(*) as number FROM user WHERE email= :email';

        $this->execute($sql, [
            'email' => $email
        ]);

        $result = $this->statement->fetch();

        if ($result['number'] > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function register($name, $email, $password)
    {
        $sql = 'INSERT into user (name, email, password) VALUES (:name, :email, :password)';

        return $this->execute($sql, [
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT)
        ]);
    }

    public function findByEmail($email)
    {
        $sql = 'SELECT * FROM user WHERE email= :email';

        $this->execute($sql, [
            'email' => $email
        ]);

        return $this->statement->fetch();
    }

    public function findById($id)
    {
        $sql = 'SELECT * FROM user WHERE id= :id';

        $this->execute($sql, [
            'id' => $id
        ]);

        return $this->statement->fetch();
    }
}