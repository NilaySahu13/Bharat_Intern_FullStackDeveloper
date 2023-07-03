<?php @session_start();
if(isset($_SESSION["uname"])&& $_SESSION["utype"]=="admin"){
    $subTitle = $_POST['subTitle'];
    $content = $_POST['content'];
    $category = $_POST['category'];
    $id = $_REQUEST['id'];
    include("dbconnect.php");
    if($_FILES['subImage']['error'] === UPLOAD_ERR_OK){
        $tempFilePath = $_FILES['subImage']['tmp_name'];
        $filename = uniqid(). '_' .$_FILES['subImage']['name'];
        move_uploaded_file($tempFilePath,".\\media\\Posts\\Images\\$filename");

        $sql="insert into subposts(stitle, scontent, skey, scategory, simage)values('$subTitle','$content', '$id', '$category','$filename')";
        print($sql);
        mysqli_query($con,"$sql") or die("Query Error1");
        header("location:subPost.php?id=$id&mssg=1");
    }
    else{
        $sql="insert into subposts(stitle, scontent, skey, scategory) values('$subTitle','$content', '$id', '$category')";
        mysqli_query($con,"$sql") or die("Query Error2");
        header("location:subPost.php?id=$id&mssg=2");
    }
    }
else{
    header("location:login.php");
}   
?>