<?php
    $title='Home';
    require_once'includes/header.php';
    require_once'db/conn.php';
    ?>

<h1 class="text-center">Patient Registration form</h1>
    <form method="POST" action="success.php">
    <div class="form-row">
    <div class="col">
        <label for="firstname">First Name</label>
      <input type="text" class="form-control" id="firstname" name="firstname" >
    </div>
    <div class="col">
    <label for="lastname">Last Name</label>
      <input type="text" class="form-control" id="lastname" name="lastname" >
    </div>
    <div class="col">
    <label for="Age">Age</label>
      <input type="text" class="form-control" id="Age" name="Age">
    </div>
    </div>
    <div class="form-group">
        <label for="emailaddress">Email address</label>
        <input type="email" class="form-control" id="emailaddress" name="emailaddress" >
    </div>
    <div class="form-group">
        <label for="selectspecialization">Select Specialization
          <ol type="1"><li>Cardiology</li>
        <li>Neurology</li><li>Opthalmology</li><li>ENT</li><li>Paediatrics</li></ol>
        </label>
        <select class="form-control" id="selectspecialization" name="selectspecialization">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        </select>
    </div>
    <div class="form-group">
        <label for="describeyourproblem">Describe your problem</label>
        <textarea class="form-control" id="describeyourproblem" rows="3" name="describeyourproblem" placeholder="Describe in 250 characters"></textarea>
    </div>
    <button type="submit" class="btn btn-primary btn-block" name="Submit">Submit</button>
    </form>
    <br><br><br>

<?php require_once'includes/footer.php'; ?> 