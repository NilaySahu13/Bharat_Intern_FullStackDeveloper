<?php session_start();
if(isset($_SESSION["uname"])&& $_SESSION["utype"]=="admin"){
    $title = $_POST["title"];
    $content = $_POST["content"];
    $author = $_POST["author"];
    $date = $_POST["date"];
    $category = $_POST["category"];
    include("dbconnect.php");
    $id = uniqid();
    if($_FILES['image']['error'] === UPLOAD_ERR_OK && $_FILES['video']['error'] === UPLOAD_ERR_OK){
        $tempFilePath1 = $_FILES['image']['tmp_name'];
        $filename1 = uniqid(). '_' .$_FILES['image']['name'];
        move_uploaded_file($tempFilePath1,".\\media\\Posts\\Images\\$filename1");

        $tempFilePath2 = $_FILES['video']['tmp_name'];
        $filename2 = uniqid(). '_' .$_FILES['video']['name'];
        move_uploaded_file($tempFilePath2,".\\media\\Posts\\Videos\\$filename2");

        $sql="insert into blogposts(btitle, bcontent, bauthor, bdate, bcategory, bimage, bvideo, bkey) values('$title','$content','$author','$date','$category','$filename1','$filename2', '$id')";
        mysqli_query($con,"$sql") or die("Query Error");
        header("location:subPost.php?id=$id");
    }
    elseif($_FILES['image']['error'] === UPLOAD_ERR_OK){
        $tempFilePath1 = $_FILES['image']['tmp_name'];
        $filename1 = uniqid(). '_' .$_FILES['image']['name'];
        move_uploaded_file($tempFilePath1,".\\media\\Posts\\Images\\$filename1");

        $sql="insert into blogposts(btitle, bcontent, bauthor, bdate, bcategory, bimage, bkey) values('$title','$content','$author','$date','$category','$filename1', '$id')";
        mysqli_query($con,"$sql") or die("Query Error");
        header("location:subPost.php?id=$id");

        
    }
    elseif($_FILES['video']['error'] === UPLOAD_ERR_OK){
        $tempFilePath2 = $_FILES['video']['tmp_name'];
        $filename2 = uniqid(). '_' .$_FILES['video']['name'];
        move_uploaded_file($tempFilePath2,".\\media\\Posts\\Videos\\$filename2");

        $sql="insert into blogposts(btitle, bcontent, bauthor, bdate, bcategory, bvideo, bkey) values('$title','$content','$author','$date','$category','$filename2', '$id')";
        mysqli_query($con,"$sql") or die("Query Error");
        header("location:subPost.php?id=$id");

    }
    else{
        header("location:admin.php?mssg=2");
    }

    }
else{
    header("location:login.php");
}   
?>