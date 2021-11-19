<?php session_start();
   if(isset($_POST["btnSubmit"])){

     $username=trim($_POST["txtUsername"]);
     $password=trim($_POST["txtPassword"]);    

      if(file_exists("users.txt")){
          $users=file("users.txt");//$users[0]=admin,222222;$users[1]=demo,111111 ...        
          $login=false;
          foreach($users as $user){
              list($_username,$_password)=explode(",",$user);             

              if(trim($_username)==trim($username) && trim($_password)==trim($password)){
                $login=true;
                $_SESSION["username"]=$_username;                
                break;
              }

          }//end foreach

          if($login){

              header("location:home.php");
             
          }else{
              echo "Username or password incorrect.";
          }


      }//end file_exists
     
   

   }//end isset
?>
<form action="#" method="post">
  <div>Username<br>
  <input type="text" name="txtUsername" />
  </div>
  <div>Password<br>
  <input type="password" name="txtPassword" />
  </div>
  <div>
  <input type="submit" name="btnSubmit" value="Log In" />
  </div>
</form>