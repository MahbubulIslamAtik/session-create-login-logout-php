<?php session_start();

require_once("db_config.php");

if(isset($_POST["btnSubmit"])){

    $username=$_POST["txtUsername"];
    $password=md5($_POST["txtPassword"]);

    $result=$db->query("select id,email,full_name from users where username='$username' and password='$password'");
   
    if($db->affected_rows>0){

        list($id,$email,$full_name)=$result->fetch_row();

        $_SESSION["uid"]=$id;
        $_SESSION["email"]=$email;
        $_SESSION["username"]=$full_name;

        header("location:home.php");
    
    }else{
        echo "Username or password incorrect";
    }
    

}
  

?>
<form action="#" method="post">
  <div>
    Username<br>
    <input type="text" name="txtUsername" />
  </div>

  <div>
    Password<br>
    <input type="password" name="txtPassword" />
  </div>

  <div>
    
    <input type="submit" name="btnSubmit" value="Log In" />
  </div>
</form>
No account <a href="signup.php">Register here</a>