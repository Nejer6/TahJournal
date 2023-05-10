let addStationButton = document.getElementsByClassName("addStationButton")[0];
addStationButton.addEventListener("click", drawNewStation)

function drawNewStation() {
    this.parentElement.parentElement.nextElementSibling.insertAdjacentHTML("afterend",`
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
      <td><input name="number2[]" required></td>
      <td>Л</td>
      <td><input name="vertical_degree3[]" required></td>
      <td><input name="vertical_minute3[]" required></td>
      <td><input name="by_rail3[]" required></td>
      <td style="border: none"><input type="button" value="-" class="delStationButton"></td>
    </tr>
    <tr>
      <td><input name="sighting_point4[]" required></td>
      <td>П</td>
      <td><input name="horizontal_degree4[]" required></td>
      <td><input name="horizontal_minute4[]" required></td>
      <td><input name="level2[]" required></td>
      <td>П</td>
      <td><input name="vertical_degree4[]" required"></td>
      <td><input name="vertical_minute4[]" required></td>
      <td><input name="by_rail4[]" required></td>
      <td style="border: none"><input type="button" value="+" class="addStationButton"></td>
    </tr>
    
    <tr><td style="border-width: 0px; height: 8px"></td></tr>`);
   let addButtons = document.getElementsByClassName("addStationButton");
   addButtons[addButtons.length - 1].addEventListener("click", drawNewStation);
   let delButtons = document.getElementsByClassName("delStationButton");
   delButtons[delButtons.length - 1].addEventListener("click", delStation);
}

function delStation() {
    this.parentElement.parentElement.previousElementSibling.remove();
    this.parentElement.parentElement.previousElementSibling.remove();
    this.parentElement.parentElement.nextElementSibling.remove();
    this.parentElement.parentElement.nextElementSibling.remove();
    this.parentElement.parentElement.remove();
}