<?session_start();?>
<!-- шапка сайта -->
<? require("elements/header.php") ?>
<main>
    <img src="img/logo.png" alt="" class="imgMainPage">
    <p class="textMainPage">Расчёт данных для заполнения тахеометрического журнала.
Измерения проведены теодолитом 2Т30П.</p>
<button type="submit" class="btn btn-primary btnMainPage"  onclick="window.location.href = 'calculations/calculation.php';">Начать расчёт</button>
</main>
<!-- подвал сайта -->
<? require("elements/footer.php") ?> 