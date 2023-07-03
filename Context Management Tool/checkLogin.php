<?php session_start();

$uname = $_REQUEST["typeUserX"];
$upass = $_REQUEST["typePasswordX"];

include("dbconnect.php");
$sql = "select * from user where uname='$uname'";
$rsUser = mysqli_query($con,"$sql") or die("Query Error");

if(mysqli_num_rows($rsUser) > 0)
{
    $row = mysqli_fetch_array($rsUser);
    if($row["upass"] == $upass)
    {
        if($row['utype'] == "user")
        {
            $_SESSION["uname"] = $uname;
            $_SESSION["utype"] = "user";
            header("location:index.php");
        }
        else if($row['utype'] == "admin")
        {
            $_SESSION["uname"] = $uname;
            $_SESSION["utype"] = "admin";
            header("location:admin.php");
        }
    }
    else
    {
        header("location:login.php?mssg=3");
    }
}
else
{
    header("location:login.php?mssg=2");
}

?>