<?session_start();
$df = $_SESSION['respon']['df']
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<table id="df">
<?
for ($i = 0; $i < count($df); $i++) {
    ?>
    <tr>
        <?
        for ($j = 0; $j < count($df[0]); $j++) {
            ?>
            <td><?=$df[$i][$j]?></td>
            <?
        }
        ?>
    </tr>
    <?
}
?>
</table>
<?
$df2 = $_SESSION['respon']['df2']
?>
<?
if($_SESSION['respon']['number_pages'] > 1) {//Пока 2, но нужно 1
    ?>
    <table style="display: none;" id="df2">
    <?
    for ($i = 0; $i < count($df2); $i++) {
        ?>
        <tr>
            <?
            for ($j = 0; $j < count($df2[0]); $j++) {
                ?>
                <td><?=$df2[$i][$j]?></td>
                <?
            }
            ?>
        </tr>
        <?
    }
    ?>
    </table>
    <? 
}
?>
</body>
</html>