<?php
if(isSet($_POST['submit'])){
    $e = $_POST['email'];
    $p = $_POST['password'];
    if($e === "atharvp1199@gmail.com" && $p === "atharv1199"){
        echo "Login successfully.";
    }
    else{
       echo "Fail to login.";
    }
}
else{
    header("Location:index.html");
       exit();

}


?>