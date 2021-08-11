<?php
include 'includes/header.php';
require_once'includes/auth_check.php';
require_once 'db/conn.php';
if (isset($_POST['Submit'])){
    $id=$_POST['id'];
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $age=$_POST['Age'];
    $email=$_POST['emailaddress'];
    $department=$_POST['selectspecialization'];
    $result=$crud->editPatient($id,$fname,$lname,$age,$email,$department);
    if($result)
    {
        echo 'Record Updated Successfully';
    }
    else
    {
        echo 'error';
    }
}
else
{
    echo 'error';
}
include 'includes/footer.php';
?>