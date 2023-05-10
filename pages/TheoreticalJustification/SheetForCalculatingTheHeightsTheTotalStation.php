<?session_start();?>
<!-- шапка сайта -->
<? require("../../elements/header.php") ?>
<main class="tj">

<h1>Ведомость вычисления высот тахеометрического хода</h1>
        <div id="formula1"><img src="../../img/formuls/formula28.PNG"></div>
        <p>Вычисляют сумму практических превышений   и теоретическую сумму превышений по формуле:</p>
        <div id="formula1"><img src="../../img/formuls/formula29.PNG"></div>
        <p>Высотную невязку находят по формуле:</p>
        <div id="formula1"><img src="../../img/formuls/formula30.PNG"></div>
        <p>Допустимую невязку вычисляют по формуле:</p>
        <div id="formula1"><img src="../../img/formuls/formula31.PNG"></div>
        <p>Если <img src="../../img/formuls/formula32.PNG">вычисляют поправки в превышения по формуле:</p>
        <div id="formula1"><img src="../../img/formuls/formula33.PNG"></div>
        <p>Должно выполняться условие <img src="../../img/formuls/formula34.PNG">: 
        <p>Далее вычисляют исправленные превышения:</p>
        <div id="formula1"><img src="../../img/formuls/formula35.PNG"></div>
        <p>Должно выполняться условие: <img src="../../img/formuls/formula36.PNG"></p>
        <p>После вычисления поправок вычисляются исправленные координаты:</p>
        <div id="formula1"><img src="../../img/formuls/formula37.PNG"></div>
        <p>Должно выполняться условие:<img src="../../img/formuls/formula38.PNG"></p>

</main>
<!-- подвал сайта -->
<? require("../../elements/footer.php") ?> 