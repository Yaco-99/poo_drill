<?php
class User
{
    private $id, $username, $email, $password, $connected;

    public function newUser($pdo, $username, $email, $password, $connected)
    {
        $username = filter_var($username, FILTER_SANITIZE_STRING);

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        } else {
            return "Not an email";
        }

        $password = filter_var($password, FILTER_SANITIZE_STRING);

        if (filter_var($connected, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) !== null) {
            $connected = filter_var($connected, FILTER_SANITIZE_STRING);
        } else {
            return "Not a boolean";
        }

        $sql = $pdo->prepare("INSERT INTO users (username, email, password, connected) VALUES (?, ?, ?, ?)");
        $sql->execute(array($username, $email, $password, $connected));
        $sql->closeCursor();
    }

    public function startSession($user)
    {
        session_start();
        $_SESSION["user"] = $user;
    }

    public function endSession()
    {
        session_destroy();
    }

    public function updateName($pdo, $oldUsername, $username)
    {
        $sql = $pdo->prepare('UPDATE users set username=? WHERE username=?');
        $sql->execute(array($username, $oldUsername));
        $sql->closeCursor();
    }

    public function updateEmail($pdo, $oldEmail, $Email)
    {
        $sql = $pdo->prepare('UPDATE users set email=? WHERE email=?');
        $sql->execute(array($Email, $oldEmail));
        $sql->closeCursor();
    }

    public function deleteUser($pdo, $id)
    {
        $sql = $pdo->prepare('DELETE from users WHERE id=?');
        $sql->execute(array($id));
        $sql->closeCursor();
    }
}
