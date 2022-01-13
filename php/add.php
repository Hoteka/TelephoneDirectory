<?php
require_once "connect.php";

if (isset($_POST['add__button'])) { 
    $secondNameEdit =  $_POST['secondName'];
    $firstNameEdit = $_POST['firstName'];
    $lastNameEdit =  $_POST['lastName'];
    $telephoneEdit =  $_POST['telephone'];
    $organizationEdit =  $_POST['organization'];
    $sql = $db->prepare("INSERT INTO `directory` (secondName, firstName, lastName, telephone, organization) VALUES (?, ?, ?, ?, ?)");
    
    if($sql->execute(array($secondNameEdit, $firstNameEdit, $lastNameEdit, $telephoneEdit, $organizationEdit))){
        echo "<meta http-equiv='refresh' content='0; ../index.php'>";
    }
    else{
        echo "dfhdugh";
    }
}
?>