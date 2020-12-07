<?php
require 'PDOconnection.php';
require 'form.php';
require 'html.php';
require 'validator.php';
require 'Post.php';
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
$form = new Form($_POST);
echo $form->create("post");
echo $form->input("text", "post");
echo $form->submit();

if (isset($_POST['submit'])) {
    $post = new Post;
    $post->addPost($pdo, "test", $_POST['post']);
}

?>
</body>
</html>
