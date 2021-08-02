<?php
    $title='View records';
    require_once'includes/header.php';
    require_once'db/conn.php';
    $result=$crud->getPatients();
    ?>
<table class="table"><tr><th>Patient id</th><th>First Name</th><th>Last Name</th><th>Age</th><th>Email</th><th>Department</th><th>Problem</th><th>Actions</th></tr>
<?php 
    while($r=$result->fetch(PDO::FETCH_ASSOC)){?>
    <tr>
<td><?php echo $r['Patient_id'] ?></td>
<td><?php echo $r['First_Name'] ?></td>
<td><?php echo $r['Last_Name'] ?></td>
<td><?php echo $r['Age'] ?></td>
<td><?php echo $r['Email_Id'] ?></td>
<td><?php echo $r['department_id'] ?></td>
<td><?php echo $r['Problem'] ?></td>
<td><a href="view.php?id=<?php echo $r['Patient_id'] ?>" class="btn btn-primary">View</a>
<a href="edit.php?id=<?php echo $r['Patient_id'] ?>" class="btn btn-primary">Edit</a>
<a href="delete.php?id=<?php echo $r['Patient_id'] ?>" class="btn btn-primary">Delete</a>
</td>
</tr>
<?php } ?>
</table>
<br><br><br>
<?php require_once'includes/footer.php'; ?> 