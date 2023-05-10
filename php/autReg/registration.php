<?
session_start();
require("../connectBD.php");
$login=$conn->real_escape_string($_POST['login']);
$email=$conn->real_escape_string($_POST['email']);
$password=md5($_POST['password']);
$passwordToo=md5($_POST['passwordToo']);
$chek=$conn->query("SELECT * FROM `users` WHERE mail='$email' ");
$chek=mysqli_fetch_all($chek);
if($password==$passwordToo){
    if($chek == NULL){
        mysqli_query($conn,"INSERT INTO `users` (`id`, `login`, `password`, `role`, `mail`) VALUES (NULL, '$login', '$password', '2', '$email') ");
        $user=mysqli_query($conn,"SELECT * FROM `users` WHERE login='$login' AND password='$password' ");
        $user = mysqli_fetch_all($user);
        $_SESSION['name']=$login;
        $_SESSION['userID']=$user[0];
        $_SESSION['userArr']=$user;
    } else{
        $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: fixed; top:500px; left:35%; z-index: 3;">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <strong>Ошибка регистрации</strong> пользователь уже числится в системе
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
} else{
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: fixed; top:500px; left:35%; z-index: 3;">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <strong>Ошибка регистрации</strong> пароли не совпадают
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
header ('Location: /index.php');
?>