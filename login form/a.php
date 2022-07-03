<?php
    $con = new mysqli("localhost","root","","my_login");
    if($con->connect_error===true){
        echo "Please Check your Connection....!!!";
    }
    $fname = $_POST["txtfname"];
    $email = $_POST["txtemail"];
    $tpno = $_POST["txttpno"];
    $pw = $_POST["txtpw"];
    $cpw = $_POST["txtcpw"];
    if($pw==$cpw){
       $sql="INSERT INTO signup_details VALUES('".$fname."','".$email."','".$tpno."','".$pw."');";
       if($con->query($sql)===true){
            echo "Data Inserted";
       }
       else{
            echo "Data not Inserted";
       }
    }
    else{
        echo "passwords don't match.....";
    }
    $con->close();
?>