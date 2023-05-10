<?session_start();?>
<!-- шапка сайта -->
<? require("../elements/header.php") ?>
<main class="tj">

<? 
$link = array('link' => $_GET['link']);
$df = shell_exec('C:\Users\User\AppData\Local\Programs\Python\Python310\python.exe sendToSite.py ' . base64_encode(json_encode($link)));
$df = json_decode($df, true);
$_SESSION['respon'] = $df;
require("resultWithButtons.php");
?>

</main>
<!-- подвал сайта -->
<? require("../elements/footer.php") ?> 
    