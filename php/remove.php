<?php
require_once "connect.php";
if (isset($_POST['remove__button'])) {

    $data_user = $_POST['remove__item'];
    $remove = $db->prepare("DELETE FROM `directory` WHERE `id` = '$data_user'");
    // header('location:../index.php');
    $remove-> execute();
    if($remove-> execute()){
        echo "<meta http-equiv='refresh' content='0; ../index.php'>";
    }
}
?>
