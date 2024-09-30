<?php
    include("connect.php");

    if(isset($_POST["insertbtn"])){
      
        if($_POST["msntext"]==""){
            header("location: msnadd.php");
        }
        else{
            $cmd="INSERT INTO msn(msn_msn) values ('".$_POST["msntext"]."')";
            $res=mysqli_query($con,$cmd);
            if($res){
                header("location: msnadd.php");
            }
            else
            {
                echo("<script>alert('Hata');</script>");
            }
        }
       
    }
    if(isset($_GET["deletebtn"])&&isset($_GET["id"])){
        $msnid=$_GET["id"];
        $kmt="DELETE FROM msn where msn_id=$msnid";
        $bl=mysqli_query($con,$kmt);
        if($bl){
            header("location: msnadd.php");
        }
        else
        {
            echo("<script>alert('Hata');</script>");
        }
    }
?>