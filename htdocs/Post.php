<?php
class Post
{
    public $id_post, $title_post, $content_post;

    public function findAllPost($pdo, $table)
    {
        $sql = $pdo->prepare("SELECT * FROM $table");
        $sql->execute();
        while ($rows = $sql->fetch()) {
            echo $rows['a'];
        }
    }

    public function addPost($pdo, $table, $name)
    {
        $sql = $pdo->prepare("INSERT INTO $table (a) VALUES (?)");
        $sql->execute(array($name));
    }

}
