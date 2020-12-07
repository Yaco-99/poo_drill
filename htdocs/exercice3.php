<?php
require 'dataBase.php';
require 'user.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$pdo = DataBase::connect('my_database');

$user = new User();
/*echo $user->newUser($pdo, "username", "email@mail.be", "password", "0");
echo $user->updateName($pdo, "username", "newUsername");
echo $user->updateEmail($pdo, "email@mail.be", "newemail@mail.be");
echo $user->deleteUser($pdo, 2);*/
?>

</body>
</html>
