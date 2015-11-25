<?php


$dbi = mysqli_connect('localhost','root','','marketguide_user') or die(mysql_errno());
   
if ($dbi->connect_error ){
    die('kan ikke forbinde til SQLserver' . $dbi->connect_errno .
    ":".$dbi->connect_error);
}
$dbi->set_charset('utf8');
  
   session_start();

  /*if (isset($_POST['login'])) {*/
      

              $sql = "SELECT * FROM user WHERE email = '" . $_POST['email'] . "' && password = '" . $_POST['password'] . "'";
             
              $result = $dbi->query($sql) or die(error_reporting());

                 if ($result->num_rows == 1) {
                   $_SESSION["login"] = 'true';

                   
                   

                  

                  
                 header("location:profile.php");
                      
                      
                 } else {
                     /* .. DU ER IKKE LOGGET IND .. */
                       $_SESSION['login'] = 'false';
                     header("location:index.php");
                     
             }
            
?>