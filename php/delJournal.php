<?session_start();
    require("connectBD.php");
    $journal_id =$conn->real_escape_string( $_POST['journal_id']);

    mysqli_query($conn,"DELETE FROM `journals` WHERE `journals`.`id` = $journal_id");

    header ('Location: /pages/LK.php');   
?>