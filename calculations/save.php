<?session_start();?>
<!-- шапка сайта -->
<? require("../elements/header.php") ?>
<main class="tj d-flex justify-content-center flex-wrap mainSave">

<?
if($_SESSION['respon']['link'] != NULL){
    require("resultWithButtons.php");
    ?>
    <!-- <iframe src="result.php" width="100%" id="tableIframe">Ваш браузер не поддерживает плавающие фреймы!</iframe> -->
    <a href=<?php echo $_SESSION['respon']['link'];?>><input class="linkSaveJournal" type="submit" value="Скачать"></a>
    <?
    if($_SESSION['userArr']){
        ?>
        <form action="/php/sendToBD.php" method="POST">
            <input value="<?=$_SESSION['respon']['link']?>" name="link" style="display: none;">
            <input type="text" placeholder="Название журнала" name="nameJournal" required>
            <input type="text" placeholder="Заметка" name="note">
            <input type="submit" value="Сохранить" class="linkSaveJournal">
        </form>
        <?
    }
} else {
    ?>
    <p>Упс, похоже вы допустили ошибку при вводе данных.</p>
    <p>Если ошибка повторится, пожалуйста, напишите нам на почту и мы в ближайшее время всё починим.</p><?
}
?>

<a href="calculation.php"><input type="submit" class="linkSaveJournal" value="Начать новый расчёт"></a>

</main>
<!-- подвал сайта -->
<? require("../elements/footer.php") ?> 