<?
session_start();
require("../connectBD.php");

$email=$conn->real_escape_string($_POST['email']);
$password=md5($_POST['password']);
$user=mysqli_query($conn,"SELECT * FROM `users` WHERE mail='$email'");
$user = mysqli_fetch_all($user);
if($user!= NULL){
    if($user[0][2]==$password){
        $user=mysqli_query($conn,"SELECT * FROM `users` WHERE mail='$email' AND password='$password' ");
        $user = mysqli_fetch_all($user);
        $_SESSION['name']=$user[1];
        $_SESSION['userID']=$user[0];
        $_SESSION['userArr']=$user;
    }else{
        $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: fixed; top:500px; left:35%; z-index: 3;">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <strong>Ошибка авторизации</strong> пользователь или пароль введены не верно
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
} else{
    $_SESSION['error'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert" style="position: fixed; top:500px; left:35%; z-index: 3;">
    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
    <strong>Ошибка авторизации</strong> пользователя нет в системе
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
}
header ('Location: /index.php');
?>