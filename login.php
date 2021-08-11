<?php
    $title='User Login';
    require_once'includes/header.php';
    require_once'db/conn.php';
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $username=strtolower(trim($_POST['username']));
        $password=$_POST['password'];
        $new_password=md5($password.$username);
        $result=$user->getUser($username,$new_password);
        if(!$result)
        {
            echo '<div class="alert alert-danger">Username or password is incorrect. </div>';
        }
        else
        {
            $_SESSION['username']=$username;
            $_SESSION['id']=$result['id'];
            header("Location:viewrecords.php");
        }
    }
?>
<h1 class="text-center"><?php echo $title;?></h1>
    
<link href="css/styles.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Login Form -->
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="post">
      <input type="text" id="username" class="fadeIn second" name="username" placeholder="Username"  value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo$_POST['username']; ?>">
      <input type="password" id="password" class="fadeIn third" name="password"  placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>

<?php require_once'includes/footer.php'?>