<?php

require_once 'BaseModel.php';


class Post extends BaseModel
{
    public function getPosts()
    {
        $sql = 'SELECT * from post';

        $this->execute($sql);

        return $this->statement->fetchAll();
    }

    public function getSingle($id)
    {
        $sql = 'SELECT * from post WHERE id=' . $id;

        $this->execute($sql);

        return $this->statement->fetch();
    }

    public function getNewest($id, $limit = 10)
    {
        $sql = "SELECT * from post WHERE id <> $id ORDER BY id DESC LIMIT $limit";

        $this->execute($sql);

        return $this->statement->fetchAll();
    }

    public function incrementView($id, $view)
    {
        if (isset($_COOKIE['view']) && in_array($id, json_decode($_COOKIE['view'], true))) {
            return true;
        } else {
            $sql = "UPDATE post SET view=$view WHERE id=$id";

            $view = $_COOKIE;
            $view[] = $id;
            $cookie = json_encode($view);

            setcookie('view', $cookie, time() + 10 * 60);

            $this->execute($sql);
        }
    }

    public function incrementLike($id, $view)
    {
        $sql = "UPDATE post SET liked=$view WHERE id=$id";

        $this->execute($sql);
    }
}