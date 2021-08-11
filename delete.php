<?php
include 'includes/header.php';
require_once 'includes/auth_check.php';
require_once 'db/conn.php';
if(!$_GET['id']){
    echo 'error';
}
else{
    $id=$_GET['id'];
    $result=$crud->deletePatient($id);
    if($result)
    {
        echo 'record deleted successfully';
    }
    else
    {
        echo 'error';
    }
}
include 'includes/footer.php';
?>