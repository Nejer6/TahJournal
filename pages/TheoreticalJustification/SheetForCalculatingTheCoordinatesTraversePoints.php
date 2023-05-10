<?session_start();?>
<!-- шапка сайта -->
<? require("../../elements/header.php") ?>
<main class="tj">
    
<h1>Ведомость вычисления координат точек хода</h2>
    <div id="formula1"><img src="../../img/formuls/formula7.PNG"></div>
    <p>Вычисляется сумма измеренных углов <img src="formula8.PNG"> и теоретическая сумма измеренных углов:</p>
    <div id="formula1"><img src="../../img/formuls/formula9.PNG"></div>
    <p>где n – число сторон в ходе.</p>
    <p>Угловая невязка рассчитывается по формуле:</p>
    <div id="formula1"><img src="../../img/formuls/formula10.PNG"></div>
    <p>Угловая невязка в тахеометрическом ходе не должна превышать предельную невязку:</p>
    <div id="formula1"><img src="../../img/formuls/formula11.PNG"></div>
    <p>Поправки в углы поворота вычисляются до 0,1′ по формуле:</p>
    <div id="formula1"><img src="../../img/formuls/formula12.PNG"></div>
    <p>Должно выполняться условие <img src="formula13.PNG"></p>
    <p>Дирекционные углы сторон хода вычисляются до 0,1′ с использованием исправленных горизонтальных углов:</p>
    <div id="formula1"><img src="../../img/formuls/formula14.PNG"></div>
    <p>При этом должно выполняться условие <img src="../../img/formuls/formula15.PNG"></p>
    <p>Практические приращения координат при измерении линий нитяным дальномером вычисляются до 0,1 м по формулам:</p>
    <div id="formula1"><img src="../../img/formuls/formula16.PNG"></div>
    <p>После вычисления приращений координат вычисляются суммы практических приращений координат<img src="formula17.PNG"> и теоретические суммы приращений координат по формулам:</p>
    <div id="formula1"><img src="../../img/formuls/formula18.PNG"></div>
    <p>Вычисляются невязки:</p>
    <div id="formula1"><img src="../../img/formuls/formula19.PNG"></div>
    <p>Абсолютная и относительная линейные невязки по ходу вычисляются по формулам:</p>
    <div id="formula1"><img src="../../img/formuls/formula20.PNG"></div>
    <p>Допустимую линейную невязку и допустимую относительную линейную невязку по ходу вычисляются по формулам:</p>
    <div id="formula1"><img src="../../img/formuls/formula21.PNG"></div>
    <p>Относительная линейная невязка по ходу не должна превышать для нитяного дальномера величины 1/500.</p>
    <p>Если полученная линейная невязка удовлетворяет требованиям, то вычисляют поправки в приращение координат:</p>
    <div id="formula1"><img src="../../img/formuls/formula22.PNG"></div>
    <p>Должны выполняться условия:<img src="../../img/formuls/formula23.PNG"></p>
    <p>Поправки вводятся в соответствующие приращения координат:</p>
    <div id="formula1"><img src="../../img/formuls/formula24.PNG"></div>
    <p>Должны выполняться условия:<img src="../../img/formuls/formula25.PNG"></p>
    <p>После вычисления поправок и исправленных приращений координат вычисляются исправленные координаты:</p>
    <div id="formula1"><img src="../../img/formuls/formula26.PNG"></div>
    <p>Должны выполняться условия:<img src="../../img/formuls/formula27.PNG"></p>
    <p>Вычисления высот пунктов тахеометрического хода производят по такой же схеме, как и для координат.</p>

</main>
<!-- подвал сайта -->
<? require("../../elements/footer.php") ?> 