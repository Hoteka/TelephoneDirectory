<?php
require_once "connect.php";
 
$id = $_GET['id'];  
$sql = $db->prepare('SELECT * FROM `directory` WHERE `id` = ?');
$sql->execute(array($id));
$telephone_directory_now = $sql->fetchAll();

if (isset($_POST['edit__button'])) { 
    $secondNameEdit =  $_POST['secondName'];
    $firstNameEdit = $_POST['firstName'];
    $lastNameEdit =  $_POST['lastName'];
    $telephoneEdit =  $_POST['telephone'];
    $organizationEdit =  $_POST['organization'];
    $sql = $db->prepare("UPDATE `directory` SET `secondName` = '$secondNameEdit', `firstName` = $firstNameEdit, `lastName` = '$lastNameEdit', 
    `telephone` = '$telephoneEdit', `organization` = '$organizationEdit' WHERE `id` = ?");
    if($sql->execute(array($id))){
        echo "<meta http-equiv='refresh' content='0; ../index.php'>";
    }
}
?>
