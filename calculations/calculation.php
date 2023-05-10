<?session_start();?>
<!-- шапка сайта -->
<? require("../elements/header.php") ?>
<main class="mainmainTable">

<!-- КОД ТАБЛИЧКИ -->
<input type="button" class="btnPM" id="addAmendment" value="+">
<input type="button" class="btnPM" id="delAmendment" value="-">

<form method="POST" action="generator.php">
<table id="tableOfAmendments">
    <tr id="meters">
    <td>
        Метры
    </td>
    <td><input name='meters[]' size="3" required></td>
    </tr>
    <tr id="amendments">
    <td>
        Поправка
    </td>
    <td><input name='amendments[]' size="3" required></td>
    </tr>
</table>  

<table id="mainTable" class="mainTable">
    <tr class="tableHeader">
    <td rowspan="3"> № станции</td>
    <td rowspan="3">Визир. пункты</td>
    <td colspan="3">Гор.круг</td>
    <td rowspan="3">Визир. пункты</td>
    <td colspan="3">Вертик.круг</td>
    <td rowspan="3">По рейке</td>
    </tr>
    <tr class="tableHeader">
    <td rowspan="2">Л/П</td>
    <td colspan="2">Отсчёты</td>
    <td rowspan="2">Л/П</td>
    <td colspan="2">Отсчёты</td>
    </tr>
    <tr class="tableHeader">
    <td>Градусы</td>
    <td>Минуты</td>
    <td>Градусы</td>
    <td>Минуты</td>
    </tr>


    <tr>
    <td rowspan="2"><input class="bigTd" name="number[]" required></td>
    <td><input name="sighting_point1[]" required></td>
    <td>Л</td>
    <td><input name="horizontal_degree1[]" required></td>
    <td><input name="horizontal_minute1[]" required></td>
    </tr>
    <tr>
    <td><input name="sighting_point2[]" required></td>
    <td>Л</td>
    <td><input name="horizontal_degree2[]" required></td>
    <td><input name="horizontal_minute2[]" required></td>
    </tr>

    <tr>
    <td rowspan="2"><input class="bigTd" name="level[]" required></td>
    <td><input name="sighting_point3[]" required></td>
    <td>П</td>
    <td><input name="horizontal_degree3[]" required></td>
    <td><input name="horizontal_minute3[]" required></td>
    <td><input name="number2[]" required></td>
    <td>Л</td>
    <td><input name="vertical_degree3[]" required></td>
    <td><input name="vertical_minute3[]" required></td>
    <td><input name="by_rail3[]" required></td>
    </tr>
    <tr>
    <td><input name="sighting_point4[]" required></td>
    <td>П</td>
    <td><input name="horizontal_degree4[]" required></td>
    <td><input name="horizontal_minute4[]" required></td>
    <td><input name="level2[]" required></td>
    <td>П</td>
    <td><input name="vertical_degree4[]" required></td>
    <td><input name="vertical_minute4[]" required></td>
    <td><input name="by_rail4[]" required></td>
    <td   style="border: none;"><input type="button" value="+" class="addStationButton"   required></td>
    </tr>

    <tr><td style="border-width: 0px; height: 8px"></td></tr>

    <tr>
    <td rowspan="2"><input class="bigTd" name="number[]" required></td>
    <td><input name="sighting_point1[]" required></td>
    <td>Л</td>
    <td><input name="horizontal_degree1[]" required></td>
    <td><input name="horizontal_minute1[]" required></td>
    <td><input name="number1[]" required></td>
    <td>Л</td>
    <td><input name="vertical_degree1[]" required></td>
    <td><input name="vertical_minute1[]" required></td>
    <td><input name="by_rail1[]" required></td>
    </tr>
    <tr>
    <td><input name="sighting_point2[]" required></td>
    <td>Л</td>
    <td><input name="horizontal_degree2[]" required></td>
    <td><input name="horizontal_minute2[]" required></td>
    <td><input name="level1[]" required></td>
    <td>П</td>
    <td><input name="vertical_degree2[]" required></td>
    <td><input name="vertical_minute2[]" required></td>
    <td><input name="by_rail2[]" required></td>
    </tr>

    <tr>
    <td rowspan="2"><input class="bigTd" name="level[]" required></td>
    <td><input name="sighting_point3[]" required></td>
    <td>П</td>
    <td><input name="horizontal_degree3[]" required></td>
    <td><input name="horizontal_minute3[]" required></td>
    </tr>
    <tr>
    <td><input name="sighting_point4[]" required></td>
    <td>П</td>
    <td><input name="horizontal_degree4[]" required></td>
    <td><input name="horizontal_minute4[]" required></td>
    </tr>
</table>

<input type="button" value="Добавить данные для ведомости вычисления координат точек хода" id="btnStatement" class="btnCalcul">

<input value="1" style="display: none;" name="number_pages" id="number_pages">
<input type="submit" value="Рассчитать" class="btnCalcul" required>
</form>

<script src="../js/tableOfAmendments.js"></script>
<script src="../js/mainTable.js"></script>
<script src="../js/statement.js"></script>

<!-- КОД ТАБЛИЧКИ КОНЕЦ -->

</main>
<!-- подвал сайта -->
<? require("../elements/footer.php") ?> 