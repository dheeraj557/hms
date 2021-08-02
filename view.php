<?php
    $title='View record';
    require_once'includes/header.php';
    require_once'db/conn.php';
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $result=$crud->getPatientDetails($id);
    }
    else
    {
        echo "<h1 class = 'text-danger'>Please check details and try again</h1>";
    }
    ?>
<?php echo 'Name-'.$result['First_Name'].' '.$result['Last_Name']; ?><br><br>
<?php echo 'Age-'.$result['Age']; ?><br><br>
<?php echo 'Department-'.$result['department_name']; ?><br><br>
<?php echo 'Email-id-'.$result['Email_Id']; ?><br><br>




<br><br><br>
<?php require_once'includes/footer.php'; ?> 