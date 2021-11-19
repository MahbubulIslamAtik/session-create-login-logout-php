<?php  
  require_once("db_config.php");
  if(isset($_POST["btnSubmit"])){    
    $fullname=$_POST["txtFullname"];
    $email=$_POST["txtEmail"];
    $username=$_POST["txtUsername"];
    $password=md5($_POST["txtPassword"]);

   //$pname=$_FILES["file"]["name"];
   $tmp_name=$_FILES["file"]["tmp_name"];

   $db->query("insert into users(full_name,email,username,password)values('$fullname','$email','$username','$password')");
     
   copy($tmp_name,"img/{$db->insert_id}.jpg");

   echo "Successfully registred";

  }
?>
<form action="#" method="post" enctype="multipart/form-data">
  <div>Full Name<br>
    <input type="text" name="txtFullname" />
  </div>
  <div>Email<br>
    <input type="text" name="txtEmail" />
  </div>

  <div>Username<br>
    <input type="text" name="txtUsername" />
  </div>
  <div>Password<br>
     <input type="password" name="txtPassword" />
  </div>

  <div>Photo<br>
     <input type="file" name="file" />
  </div>

  <div>
  <input type="submit" name="btnSubmit" value="Log In" />
  </div>
</form>
<a href="index.php">Login Here</a>