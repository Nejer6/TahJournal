<?session_start();
    require("../php/connectBD.php");
?>
<!-- шапка сайта -->
<? require("../elements/header.php") ?>
<main class="tj">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Название журнала</th>
      <th scope="col">Заметка</th>
      <th scope="col">Дата</th>
      <th scope="col" colspan="2"></th>
    </tr>
  </thead>
  <tbody>

<? 
    $user_id = $_SESSION["userArr"][0][0];
    $journals = mysqli_query($conn,"SELECT * FROM `journals` WHERE user_id = '$user_id'");
    $journals = mysqli_fetch_all($journals);
    foreach ($journals as &$journal) {
        ?>
        <tr>
            <td><a class="linkJournal" href="../calculations/preview.php?link=<?=$journal[4]?>"><?=$journal[2]?></a></td>
            <td><?=$journal[3]?></td>
            <td><?=$journal[5]?></td>
            <td><a href="../calculations/<?=$journal[4]?>"><button class="btnDownloadJournal">Скачать</button></a></td>
            <td><form action="../php/delJournal.php" method="POST">
              <input type="text" name='journal_id' value="<?=$journal[0]?>" style="display: none;"> 
              <input type="submit" value="Удалить" class='btnDel'>
            </form></td>
        </tr>
        <?
    }
?>
 
 </tbody>
</table>
</main>
<!-- подвал сайта -->
<? require("../elements/footer.php") ?> 