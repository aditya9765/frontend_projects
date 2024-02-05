<?php
include "connect.php";

////using gate method to access id from url
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM crud WHERE id = $id";
    $result = $con->query($sql);
    header("location:display.php");
}

?>