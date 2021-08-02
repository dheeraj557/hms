<?php
    $title='Update';
    require_once'includes/header.php';
    require_once'db/conn.php';
    if(!isset($_GET['id']))
    {
      echo 'error';
    }
    else
    {
      $id=$_GET['id'];
      $results=$crud->getPatientDetails($id);
    ?>

<h1 class="text-center">Edit records</h1>
    <form method="POST" action="editpost.php">
      <input type="hidden" name="id" value="<?php echo $results['Patient_id'] ?>"></input>
    <div class="form-row">
    <div class="col">
        <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $results['First_Name'] ?>" >
    </div>
    <div class="col">
    <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $results['Last_Name'] ?>" >
    </div>
    <div class="col">
    <label for="Age">Age</label>
      <input type="text" class="form-control" id="Age" name="Age" value="<?php echo $results['Age'] ?>">
    </div>
    </div>
    <div class="form-group">
        <label for="emailaddress">Email address</label>
        <input type="email" class="form-control" id="emailaddress" name="emailaddress" value="<?php echo $results['Email_Id'] ?>" >
    </div>
    <div class="form-group">
        <label for="selectspecialization">Select Specialization
          <ol type="1"><li>Cardiology</li>
        <li>Neurology</li><li>Opthalmology</li><li>ENT</li><li>Paediatrics</li></ol>
        </label>
        <select class="form-control" id="selectspecialization" name="selectspecialization" value="<?php echo $results['department_id'] ?>">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        </select>
    </div>
    <button type="submit" class="btn btn-success btn-block" name="Submit">Save changes</button>
    </form>
    <?php } ?>
    <br><br><br>

<?php require_once'includes/footer.php'; ?> 