<?php
    require_once 'connect.php';

    $post = $_POST['post'];
    $login = $_POST['log'];
    $date = date(" H : i : s d - m - Y ");
    $rwr = mysqli_query($connect, "INSERT INTO `post`(`id`, `login`, `text`, `dtime`) VALUES(NULL, '$login', '".addslashes($post)."', '$date')");
    //mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`,`secret_word`) VALUES (NULL, '$login', '$email', '$password_hsh','$secret_word_hsh')");
    if(!($rwr)){
      echo "проблемы с БД";
    }
    header('Location: index.php');
 ?>
