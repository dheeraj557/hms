<?php
    $title='success';
    require_once 'includes/header.php';
    require_once'db/conn.php';
    if (isset($_POST['Submit'])){
        $fnanme=$_POST['firstname'];
        $lname=$_POST['lastname'];
        $age=$_POST['Age'];
        $emailid=$_POST['emailaddress'];
        $dep=$_POST['selectspecialization'];
        $problem=$_POST['describeyourproblem'];
        $isSuccess=$crud->insert($fnanme,$lname,$age,$emailid,$dep,$problem);
        if($isSuccess)
        {
            echo '<h1 class="text-center text-success">You have been successfully registered</h1>';
        }
        else
        {
            echo '<h1 class="text-center text-danger">There was a procesing error</h1>';
        }
    }
?>
<?php echo 'Name-'.$_POST['firstname'].' '.$_POST['lastname']; ?><br><br>
<?php echo 'Age-'.$_POST['Age']; ?><br><br>
<?php echo 'Department-'.$_POST['selectspecialization']; ?><br><br>
<?php echo 'Email-id-'.$_POST['emailaddress']; ?><br><br>
<br><br><br>
<?php
    require_once 'includes/footer.php';
?>