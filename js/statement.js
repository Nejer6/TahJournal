function statementBtns() {
    var number_pages = document.getElementById("number_pages");

    if (this.value == "Добавить данные для ведомости вычисления координат точек хода") {
        this.value = "Убрать данные для ведомости вычисления координат точек хода";
        number_pages.value = +number_pages.value + 1;
        this.insertAdjacentHTML("afterend", `
        <table class="mainTable">
    <tr>
        <td colspan="2">Дир. уг</td>
        <td rowspan="2">X</td>
        <td rowspan="2">Y</td>
        <td rowspan="2">H</td>
    </tr>
    <tr>
        <td>Гр</td>
        <td>Мин</td>
    </tr>
    <tr>
        <td><input name="dir_deg[]" required></td>
        <td><input name="dir_min[]" required></td>
        <td><input name="X[]" required></td>
        <td><input name="Y[]" required></td>
        <td><input name="H[]" required></td>
    </tr>
    <tr> 
        <td><input name="dir_deg[]" required></td>
        <td><input name="dir_min[]" required></td>
        <td><input name="X[]" required></td>
        <td><input name="Y[]" required></td>
        <td><input name="H[]" required></td>
    </tr>
</table>`);
    } else {
        this.value = "Добавить данные для ведомости вычисления координат точек хода";
        number_pages.value = +number_pages.value - 1;
        this.nextElementSibling.remove();
    }
}

document.getElementById("btnStatement").addEventListener("click", statementBtns);
