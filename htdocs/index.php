<?php
require 'PDOconnection.php';
require 'form.php';
require 'html.php';
require 'validator.php';
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
$pdo = Connexion::db("my_database");
$connect = new Connexion;
echo $connect->countTable($pdo, "*", 'test');

$post = new Post;

echo $post->findAllPost($pdo, "test");
?>

   <?php
$form = new Form($_POST);
echo $form->create("post");
echo $form->input("text", "user");
echo $form->select("genre", ["male", "female"]);
echo $form->textarea(3, "description");
echo $form->checkInput("radio", "genre", ["male", "female"]);
echo $form->checkInput("checkbox", "genre", ["male", "female"]);
?>

<?php
echo '<p>test</p>';
$html = new Html();
echo $html->css("assets/css/style.css");
echo $html->js("assets/js/script.js");
echo $html->meta("metaName", "content");
echo $html->link("google.be", "One link");
echo $html->img("img/image.pnj", "...");

$validate = new Validator();
echo $validate->bool("false");
echo $validate->regex("false", "/^f(.*)/");
echo $validate->regex("notfalse", "/^f(.*)/");
echo $validate->int("58");
?>
</body>
</html>
